<?php

namespace App\Domain\Glossary;

use LaravelDomainOriented\Services\ValidateService;

class GlossaryValidateService extends ValidateService
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
            'description' => 'required',
        ],
        self::UPDATE => [
            'id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required',
        ],
        self::DESTROY => [
            'id' => 'required|integer',
        ],
    ];
}
