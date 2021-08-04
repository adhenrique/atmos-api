<?php

namespace App\Domain\WindProfileExponent;

use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class WindProfileExponentSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(WindProfileExponentSearchModel $model, WindProfileExponentFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }

    public function listGrouped()
    {
        $builder = $this->model->query();
        $data = $builder->with(['surface'])->get();
        $template = [
            'spanHead' => [],
            'head' => [
                [
                    'id' => 'stability',
                    'label' => 'Stability Class',
                ],
            ],
            'items' => [],
        ];

        foreach ($data as $item) {
            $spanKey = 'surface';
            $surfaceKey = 'surface_' . $item->surface_id;
            $stabilityKey = $item->stability_class;

            if (!array_key_exists($spanKey, $template['spanHead'])) {
                $template['spanHead'][$spanKey] = [
                    'id' => $spanKey,
                    'label' => 'Surface',
                ];
            }

            if (!array_key_exists($surfaceKey, $template['head'])) {
                $template['head'][$surfaceKey] = [
                    'id' => $surfaceKey,
                    'label' => $item->surface->name,
                ];
            }

            if (!array_key_exists($stabilityKey, $template['items'])) {
                $template['items'][$stabilityKey] = [
                    'id' => $stabilityKey,
                    'stability' => $stabilityKey,
                ];
            }

            $template['head'][$surfaceKey][$spanKey] = 'surface';
            $template['items'][$stabilityKey][$surfaceKey] = $item->value;
        }

        return [
            'spanHead' => array_values($template['spanHead']),
            'head' => array_values($template['head']),
            'items' => array_values($template['items']),
        ];
    }
}
