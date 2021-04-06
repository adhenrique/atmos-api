<?php

namespace App\Domain\StabilityClassification;

use Illuminate\Http\Request;
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

    public function listConditionsByTime(Request $request, int $timeId)
    {
        $builder = $this->model->query()->with('condition');
        $builder = $builder->where('time_id', $timeId);
        $builder = $this->filterService->apply($builder, $request);

        $data = $builder->get();
        $conditions = [];
        $collection = collect();

        foreach ($data as $item) {
            $condition = $item->condition;
            $key = $condition->id;

            if (!array_key_exists($key, $conditions)) {
                $conditions[$key] = $condition;
                $collection->push($condition);
            }
        }

        return $collection;
    }
}
