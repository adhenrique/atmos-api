<?php

namespace App\Domain\Surfaces;

use LaravelDomainOriented\Services\FilterService;

class SurfacesFilterService extends FilterService
{
    protected array $fields = ['id', 'name'];
}
