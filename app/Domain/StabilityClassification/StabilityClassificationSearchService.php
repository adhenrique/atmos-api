<?php

namespace App\Domain\StabilityClassification;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class StabilityClassificationSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(StabilityClassificationSearchModel $model, StabilityClassificationFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
