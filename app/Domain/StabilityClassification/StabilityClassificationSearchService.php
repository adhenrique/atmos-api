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

    public function listGroupedByTimeAndCondition()
    {
        $builder = $this->model->query();
        $data = $builder->with(['time', 'condition'])->get();
        $template = [
            'spanHead' => [],
            'head' => [
                [
                    'id' => 'ums',
                    'label' => 'u (m/s)',
                ],
            ],
            'items' => [],
        ];

        foreach ($data as $item) {
            $timeKey = 'time_' . $item->time_id;
            $conditionKey = 'condition_' . $item->condition_id;
            $umsKey = $item->ums;

            if (!array_key_exists($timeKey, $template['spanHead'])) {
                $template['spanHead'][$timeKey] = [
                    'id' => $timeKey,
                    'label' => $item->time->name,
                ];
            }

            if (!array_key_exists($conditionKey, $template['head'])) {
                $template['head'][$conditionKey] = [
                    'id' => $conditionKey,
                    'label' => $item->condition->name,
                ];
            }

            if (!array_key_exists($umsKey, $template['items'])) {
                $template['items'][$umsKey] = [
                    'id' => $umsKey,
                    'ums' => $umsKey,
                ];
            }

            $template['head'][$conditionKey][$timeKey] = $item->time->name;
            $template['items'][$umsKey][$conditionKey] = $item->class;
        }

        return [
            'spanHead' => array_values($template['spanHead']),
            'head' => array_values($template['head']),
            'items' => array_values($template['items']),
        ];
    }
}
