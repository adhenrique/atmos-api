<?php

namespace App\Domain\Calc;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class CalcSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(CalcSearchModel $model, CalcFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
