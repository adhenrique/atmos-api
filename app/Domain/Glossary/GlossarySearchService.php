<?php

namespace App\Domain\Glossary;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class GlossarySearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(GlossarySearchModel $model, GlossaryFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }
}
