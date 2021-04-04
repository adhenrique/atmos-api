<?php

namespace App\Domain\DistanceOperator;

use LaravelDomainOriented\Services\FilterService;

class DistanceOperatorFilterService extends FilterService
{
    protected array $fields = ['id', 'name'];
}
