<?php

namespace App\Domain\DistanceOperator;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class DistanceOperatorSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(DistanceOperatorSearchModel $model, DistanceOperatorFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
