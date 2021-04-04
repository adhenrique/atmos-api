<?php

namespace App\Domain\Condition;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class ConditionSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(ConditionSearchModel $model, ConditionFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
