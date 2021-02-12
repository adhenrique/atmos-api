<?php

namespace App\Domain\CurveFitConstant;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class CurveFitConstantSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(CurveFitConstantSearchModel $model, CurveFitConstantFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
