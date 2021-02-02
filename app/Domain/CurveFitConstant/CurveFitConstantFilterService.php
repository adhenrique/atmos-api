<?php

namespace App\Domain\CurveFitConstant;

use LaravelDomainOriented\Services\FilterService;

class CurveFitConstantFilterService extends FilterService
{
    protected array $fields = ['id', 'stability_class'];
}
