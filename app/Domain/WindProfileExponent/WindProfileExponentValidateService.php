<?php

namespace App\Domain\WindProfileExponent;

use LaravelDomainOriented\Services\ValidateService;

class WindProfileExponentValidateService extends ValidateService
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
            'stability_class' => 'required|string|max:1',
            'rough' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'smooth' => 'required|regex:/^\d*(\.\d{1,2})?$/',
        ],
        self::UPDATE => [
            'id' => 'required|integer',
            'stability_class' => 'required|string|max:1',
            'rough' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'smooth' => 'required|regex:/^\d*(\.\d{1,2})?$/',
        ],
        self::DESTROY => [
            'id' => 'required|integer',
        ],
    ];
}
