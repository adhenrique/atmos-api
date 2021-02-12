<?php

namespace App\Domain\StabilityClassification;

use LaravelDomainOriented\Services\ValidateService;

class StabilityClassificationValidateService extends ValidateService
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
            'ums' => 'required|string',
            'strong' => 'required|string',
            'moderate' => 'required|string',
            'slight' => 'required|string',
            'cloudy' => 'required|string',
            'clear' => 'required|string',
        ],
        self::UPDATE => [
            'id' => 'required|integer',
            'ums' => 'required|string',
            'strong' => 'required|string',
            'moderate' => 'required|string',
            'slight' => 'required|string',
            'cloudy' => 'required|string',
            'clear' => 'required|string',
        ],
        self::DESTROY => [
            'id' => 'required|integer',
        ],
    ];
}
