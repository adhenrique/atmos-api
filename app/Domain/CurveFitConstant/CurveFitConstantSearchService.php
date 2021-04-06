<?php

namespace App\Domain\CurveFitConstant;

use Illuminate\Http\Request;
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

    public function listStabilityClasses(Request $request)
    {
        $builder = $this->model->query();
        $builder = $this->filterService->apply($builder, $request);
        $builder = $builder->distinct()->select('stability_class');

        return $this->paginateResults($request, $builder);
    }

    // todo - abstract this into lib
    private function paginateResults(Request $request, $builder)
    {
        $paginate = $request->get('paginate');

        $page = $paginate['page'] ?? 0;
        $perPage = $paginate['per_page'] ?? $this->perPage;

        if ($paginate) {
            return $builder
                ->paginate($perPage, [$this->model->getTable().".*"], 'page', $page + $this->paginateOffset);
        }
        return $builder->get();
    }
}
