<?php

namespace App\Domain\CurveFitConstant;

use LaravelDomainOriented\Services\ValidateService;

class CurveFitConstantValidateService extends ValidateService
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
            'a' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'b' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'c' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'd' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'f' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'is_bigger_than_one_km' => 'required|integer',
        ],
        self::UPDATE => [
            'id' => 'required|integer',
            'stability_class' => 'required|string|max:1',
            'a' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'b' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'c' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'd' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'f' => 'required|regex:/^\d*(\.\d{1,3})?$/',
            'is_bigger_than_one_km' => 'required|integer',
        ],
        self::DESTROY => [
            'id' => 'required|integer',
        ],
    ];
}
