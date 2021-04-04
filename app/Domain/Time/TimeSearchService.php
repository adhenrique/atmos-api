<?php

namespace App\Domain\Time;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class TimeSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(TimeSearchModel $model, TimeFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
