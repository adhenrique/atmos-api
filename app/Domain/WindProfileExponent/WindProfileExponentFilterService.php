<?php

namespace App\Domain\WindProfileExponent;

use LaravelDomainOriented\Services\FilterService;

class WindProfileExponentFilterService extends FilterService
{
    protected array $fields = ['id', 'stability_class'];
}
