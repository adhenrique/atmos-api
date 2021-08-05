<?php

namespace App\Domain\User;

use App\Facades\VariablesFacade;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Contracts\Auth\Authenticatable as AuthUser;

class UserPolicy
{
    use HandlesAuthorization;

    public function index(AuthUser $auth): bool
    {
        return $auth->role_id === VariablesFacade::config('roles.admin');
    }

    public function show(AuthUser $auth): bool
    {
        return $auth->role_id === VariablesFacade::config('roles.admin');
    }

    public function store(AuthUser $auth): bool
    {
        return $auth->role_id === VariablesFacade::config('roles.admin');
    }

    public function update(AuthUser $auth): bool
    {
        return $auth->role_id === VariablesFacade::config('roles.admin');
    }

    public function destroy(AuthUser $auth): bool
    {
        return $auth->role_id === VariablesFacade::config('roles.admin');
    }
}
