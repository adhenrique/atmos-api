<?php

namespace App\Domain\StabilityClassification;

use LaravelDomainOriented\Services\FilterService;

class StabilityClassificationFilterService extends FilterService
{
    protected array $fields = ['id', 'ums'];
}
