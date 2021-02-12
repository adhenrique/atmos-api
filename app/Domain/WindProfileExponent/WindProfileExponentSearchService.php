<?php

namespace App\Domain\WindProfileExponent;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class WindProfileExponentSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(WindProfileExponentSearchModel $model, WindProfileExponentFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
