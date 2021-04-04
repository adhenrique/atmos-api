<?php

namespace Database\Seeders;

use App\Domain\WindProfileExponent\WindProfileExponentPersistenceService;
use App\Facades\VariablesFacade;

class WindProfileExponentSeeder extends TableSeeder
{
    public function __construct(WindProfileExponentPersistenceService $windProfileExponentPersistenceService)
    {
        $this->service = $windProfileExponentPersistenceService;
        $this->data = [
            [
                'stability_class' => 'A',
                'value' => 0.15,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'A',
                'value' => 0.07,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'A-B',
                'value' => 0.15,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'A-B',
                'value' => 0.07,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'B',
                'value' => 0.15,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'B',
                'value' => 0.07,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'B-C',
                'value' => 0.175,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'B-C',
                'value' => 0.085,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'C',
                'value' => 0.2,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'C',
                'value' => 0.1,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'C-D',
                'value' => 0.225,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'C-D',
                'value' => 0.125,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'D',
                'value' => 0.25,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'D',
                'value' => 0.15,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'E',
                'value' => 0.3,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'E',
                'value' => 0.35,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
            [
                'stability_class' => 'F',
                'value' => 0.3,
                'surface_id' => VariablesFacade::config('surfaces.rough'),
            ],
            [
                'stability_class' => 'F',
                'value' => 0.35,
                'surface_id' => VariablesFacade::config('surfaces.smooth'),
            ],
        ];
    }
}
