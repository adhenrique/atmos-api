<?php

namespace App\Domain\Calc;

use LaravelDomainOriented\Services\FilterService;

class CalcFilterService extends FilterService
{
    protected array $fields = ['id', 'name'];
}
