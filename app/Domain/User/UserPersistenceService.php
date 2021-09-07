<?php

namespace App\Domain\User;

use App\Exceptions\PasswordDoesNotMatchException;
use App\Facades\VariablesFacade;
use App\Mail\ConfirmedMail;
use App\Mail\NewUserMail;
use App\Mail\PendingMail;
use App\Mail\RegisteredMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class UserPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(UserPersistenceModel $model)
    {
        $this->model = $model;
    }

    public function store(array $data)
    {
        $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
        $password = $data['password'] ?? substr($random, 0, 10);

        $data = array_merge($data, [
            'password' => $password,
            'status' => VariablesFacade::config('status.active'),
        ]);

        $storedUser = null;
        DB::beginTransaction();
        try {
            $storedUser = parent::store($data);
            Mail::to(sendTo($data['email']))->send(new RegisteredMail($data['name']));
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        return $storedUser;
    }

    public function register(array $data)
    {
        $data = array_merge($data, [
            'status' => VariablesFacade::config('status.pending'),
            'access_period_end_date' => now()->add('1 year'),
            'role_id' => VariablesFacade::config('roles.student'),
        ]);

        $storedUser = null;
        DB::beginTransaction();
        try {
            $storedUser = parent::store($data);
            Mail::to(sendTo($data['email']))->send(new PendingMail($data['name']));
            Mail::to(sendTo(VariablesFacade::config('admin.email')))->send(new NewUserMail());
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        return $storedUser;
    }

    public function active(array $data)
    {
        $data = array_merge($data, [
            'status' => VariablesFacade::config('status.active'),
        ]);

        $updatedUser = null;
        DB::beginTransaction();
        try {
            $updatedUser = parent::update($data, $data['id']);
            $user = $this->model->findOrFail($data['id']);

            Mail::to(sendTo($user->email))->send(new ConfirmedMail($user->name));
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        return $updatedUser;
    }

    public function inactive(array $data)
    {
        $data = array_merge($data, [
            'status' => VariablesFacade::config('status.inactive'),
        ]);

        $updatedUser = null;
        DB::beginTransaction();
        try {
            $updatedUser = parent::update($data, $data['id']);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        return $updatedUser;
    }

    public function updateMe(array $data)
    {
        $user = $this->model->query()->where('id', $data['id'])->firstOrFail();
        $fillable = $this->model->getFillable();
        $newData = array_filter($data, function ($value, $key) use ($fillable) {
            return in_array($key, $fillable) && $value;
        }, ARRAY_FILTER_USE_BOTH);

        if (Hash::check($data['old_password'], $user->password)) {
            return $this->update($newData, $data['id']);
        }

        throw new PasswordDoesNotMatchException();
    }
}
