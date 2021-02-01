<?php

namespace App\Domain\User;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class UserSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(UserSearchModel $model, UserFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
