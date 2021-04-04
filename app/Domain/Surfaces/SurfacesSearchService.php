<?php

namespace App\Domain\Surfaces;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class SurfacesSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(SurfacesSearchModel $model, SurfacesFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
