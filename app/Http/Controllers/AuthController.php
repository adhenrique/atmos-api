<?php

namespace App\Http\Controllers;

use App\Domain\User\UserSearchService;
use App\Facades\VariablesFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $userSearchService;

    public function __construct(UserSearchService $userSearchService)
    {
        $this->userSearchService = $userSearchService;
    }

    public function logIn(Request $request)
    {
        $request->validate(
            [
                'email'    => 'required|string',
                'password' => 'required|string',
            ]
        );

        $user = $this->userSearchService->findByEmail($request->get('email'));

        if (!$user) {
            return response()->json(['error' => 'This user does not exist. Are you sure the email is correct?'], 404);
        }

        if ($user->status === 'pending') {
            return response()->json([
                'error' => 'Your account is pending activation. (You will be notified by email)'
            ], 403);
        }

        if ($user->status === 'inactive') {
            return response()->json([
                'error' => 'Your account is inactive. Contact an Administrator'
            ], 403);
        }

        if ($user->access_period_end_date->lte(now())) {
            return response()->json([
                'error' => 'Your period access expired. Contact an Administrator'
            ], 403);
        }

        if (Auth::guard()->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return response()->json([], 204);
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
}
