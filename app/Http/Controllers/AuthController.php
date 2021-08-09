<?php

namespace App\Http\Controllers;

use App\Domain\User\UserPersistenceService;
use App\Domain\User\UserSearchService;
use App\Facades\VariablesFacade;
use App\Mail\ContactMail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    private $userSearchService;
    private $userPersistenceService;

    public function __construct(UserSearchService $userSearchService, UserPersistenceService $userPersistenceService)
    {
        $this->userSearchService = $userSearchService;
        $this->userPersistenceService = $userPersistenceService;
    }

    public function logIn(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|string',
                'password' => 'required|string',
            ]
        );

        $user = $this->userSearchService->findByEmail($request->get('email'));

        if (!$user) {
            return response()->json(['error' => 'This user does not exist. Are you sure the email is correct?'], 404);
        }

        if ($user->status === 'pending') {
            return response()->json([
                'error' => 'pending'
            ], 403);
        }

        if ($user->status === 'inactive') {
            return response()->json([
                'error' => 'inactive'
            ], 403);
        }

        if ($user->access_period_end_date->lte(now())) {
            return response()->json([
                'error' => 'period'
            ], 403);
        }

        if (Auth::guard()->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'role_id' => $user->role_id,
            ];
            return response()->json($data);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function logOut(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([], 204);
    }

    // todo - use DB::transaction ?
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            ['email' => sendTo($request->get('email'))],
        );

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => $status], 200)
            : response()->json(['error' => 'This user does not exist. Are you sure the email is correct?'], 404);
    }

    // todo - use DB::transaction ?
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $this->userPersistenceService->update([
                    'password' => $password,
                ], $user->id);

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => $status], 200)
            : response()->json(['error' => 'Unknown user'], 404);
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|exists:users,email',
            'subject' => 'required|array',
            'message' => 'required',
        ]);


        list($name, $email, $subject, $message) = array_values($request->only(['name', 'email', 'subject', 'message']));

        Mail::to(sendTo(env('ADMIN_MAIL')))->send(new ContactMail($name, $email, $subject['label'], $message));

        return response([], 200);
    }
}
