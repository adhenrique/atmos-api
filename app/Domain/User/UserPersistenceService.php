<?php

namespace App\Domain\User;

use App\Facades\VariablesFacade;
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
        $password = substr($random, 0, 10);

        $data = array_merge($data, [
            'password' => $password,
            'status' => VariablesFacade::config('status.active'),
        ]);

        // todo - send "you are registered in app" email
        return parent::store($data);
    }

    public function register(array $data)
    {
        $data = array_merge($data, [
            'status' => VariablesFacade::config('status.pending'),
            'access_period_end_date' => now()->add('1 year'),
            'role_id' => VariablesFacade::config('roles.student'),
        ]);

        // todo - send "welcome/pending" email
        return parent::store($data);
    }
}
