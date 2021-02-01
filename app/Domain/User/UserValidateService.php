<?php

namespace App\Domain\User;

use LaravelDomainOriented\Services\ValidateService;

class UserValidateService extends ValidateService
{
    protected array $rules = [
        // You can define general validation rules, which will be inherited
        // for all actions, or you can define validation rules for each action:
        // SHOW, STORE, UPDATE, DESTROY

        // General rules validation.
        // If any action validation rule is not defined, it will inherit from here.
        'name' => 'required|string',

        // Specific action rules validation. If set, ignores general validations.
        self::SHOW => [
            'id' => 'required|integer',
        ],
        self::STORE => [
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required',
            'access_period_start_date' => 'required|date_format:Y-m-d H:i:s',
            'access_period_end_date' => 'required|date_format:Y-m-d H:i:s',
        ],
        self::UPDATE => [
            'id' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required',
            'access_period_start_date' => 'required|date_format:Y-m-d H:i:s',
            'access_period_end_date' => 'required|date_format:Y-m-d H:i:s',
        ],
        self::DESTROY => [
            'id' => 'required|integer',
        ],
    ];
}
