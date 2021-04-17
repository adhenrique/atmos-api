<?php

namespace App\Domain\Calc;

use LaravelDomainOriented\Services\ValidateService;

class CalcValidateService extends ValidateService
{
    protected array $rules = [
        // You can define general validation rules, which will be inherited
        // for all actions, or you can define validation rules for each action:
        // SHOW, STORE, UPDATE, DESTROY

        // General rules validation.
        // If any action validation rule is not defined, it will inherit from here.
        'calc' => 'required|json',

        // Specific action rules validation. If set, ignores general validations.
        self::SHOW => [
            'id' => 'required|integer',
        ],
        self::UPDATE => [
            'id' => 'required|integer',
        ],
        self::DESTROY => [
            'id' => 'required|integer',
        ],
    ];
}
