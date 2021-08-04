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

    public function listGrouped()
    {
        $builder = $this->model->query();
        $data = $builder->with(['distanceOperator'])->get();
        $template = [
            'spanHead' => [],
            'head' => [
                [
                    'id' => 'stability',
                    'label' => 'Stability',
                ],
            ],
            'items' => [],
        ];

        foreach ($data as $item) {
            $distanceOperatorKey = 'distance_operator_' . $item->distance_operator_id;
            $constantKey = 'constant_' . $item->constant . '-' . $item->distance_operator_id;
            $stabilityKey = $item->stability_class;

            if (!array_key_exists($distanceOperatorKey, $template['spanHead'])) {
                $template['spanHead'][$distanceOperatorKey] = [
                    'id' => $distanceOperatorKey,
                    'label' => $item->distanceOperator->name,
                ];
            }

            if (!array_key_exists($constantKey, $template['head'])) {
                $template['head'][$constantKey] = [
                    'id' => $constantKey,
                    'label' => $item->constant,
                ];
            }

            if (!array_key_exists($stabilityKey, $template['items'])) {
                $template['items'][$stabilityKey] = [
                    'id' => $stabilityKey,
                    'stability' => $stabilityKey,
                ];
            }

            $template['head'][$constantKey][$distanceOperatorKey] = $item->distanceOperator->name;
            $template['items'][$stabilityKey][$constantKey] = $item->value;
        }

        return [
            'spanHead' => array_values($template['spanHead']),
            'head' => array_values($template['head']),
            'items' => array_values($template['items']),
        ];
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
