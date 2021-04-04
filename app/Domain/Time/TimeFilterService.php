<?php

namespace App\Domain\Time;

use LaravelDomainOriented\Services\FilterService;

class TimeFilterService extends FilterService
{
    protected array $fields = ['id', 'name'];
}
