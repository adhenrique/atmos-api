<?php

namespace App\Domain\Condition;

use LaravelDomainOriented\Services\FilterService;

class ConditionFilterService extends FilterService
{
    protected array $fields = ['id', 'name'];
}
