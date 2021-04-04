<?php

namespace Database\Seeders;

use App\Domain\StabilityClassification\StabilityClassificationPersistenceService;
use App\Facades\VariablesFacade;

class StabilityClassificationSeeder extends TableSeeder
{
    public function __construct(StabilityClassificationPersistenceService $stabilityClassificationPersistenceService)
    {
        $this->service = $stabilityClassificationPersistenceService;
        $this->data = [
            [
                'ums' => '<=2',
                'class' => 'A',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.strong'),
            ],
            [
                'ums' => '<=2',
                'class' => 'A-B',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.moderate'),
            ],
            [
                'ums' => '<=2',
                'class' => 'B',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.slight'),
            ],
            [
                'ums' => '<=2',
                'class' => 'E',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.cloudy'),
            ],
            [
                'ums' => '<=2',
                'class' => 'F',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.clear'),
            ],
            [
                'ums' => '2-3',
                'class' => 'A-B',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.strong'),
            ],
            [
                'ums' => '2-3',
                'class' => 'B',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.moderate'),
            ],
            [
                'ums' => '2-3',
                'class' => 'C',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.slight'),
            ],
            [
                'ums' => '2-3',
                'class' => 'E',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.cloudy'),
            ],
            [
                'ums' => '2-3',
                'class' => 'F',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.clear'),
            ],
            [
                'ums' => '3-5',
                'class' => 'B',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.strong'),
            ],
            [
                'ums' => '3-5',
                'class' => 'B-C',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.moderate'),
            ],
            [
                'ums' => '3-5',
                'class' => 'C',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.slight'),
            ],
            [
                'ums' => '3-5',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.cloudy'),
            ],
            [
                'ums' => '3-5',
                'class' => 'E',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.clear'),
            ],
            [
                'ums' => '5-6',
                'class' => 'C',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.strong'),
            ],
            [
                'ums' => '5-6',
                'class' => 'C-D',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.moderate'),
            ],
            [
                'ums' => '5-6',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.slight'),
            ],
            [
                'ums' => '5-6',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.cloudy'),
            ],
            [
                'ums' => '5-6',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.clear'),
            ],
            [
                'ums' => '>6',
                'class' => 'C',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.strong'),
            ],
            [
                'ums' => '>6',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.moderate'),
            ],
            [
                'ums' => '>6',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.day'),
                'condition_id' => VariablesFacade::config('conditions.slight'),
            ],
            [
                'ums' => '>6',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.cloudy'),
            ],
            [
                'ums' => '>6',
                'class' => 'D',
                'time_id' => VariablesFacade::config('times.night'),
                'condition_id' => VariablesFacade::config('conditions.clear'),
            ],
        ];
    }
}
