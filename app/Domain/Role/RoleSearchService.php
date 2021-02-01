<?php

namespace App\Domain\Role;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class RoleSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(RoleSearchModel $model, RoleFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
