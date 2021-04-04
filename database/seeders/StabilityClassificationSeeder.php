<?php

namespace Database\Seeders;

use App\Domain\StabilityClassification\StabilityClassificationPersistenceService;

class StabilityClassificationSeeder extends TableSeeder
{
    public function __construct(StabilityClassificationPersistenceService $stabilityClassificationPersistenceService)
    {
        $this->service = $stabilityClassificationPersistenceService;
        $this->data = [
            [
                'ums' => '<2',
                'strong' => 'A',
                'moderate' => 'A-B',
                'slight' => 'B',
                'cloudy' => 'E',
                'clear' => 'F',
            ],
            [
                'ums' => '2-3',
                'strong' => 'A-B',
                'moderate' => 'B',
                'slight' => 'C',
                'cloudy' => 'E',
                'clear' => 'F',
            ],
            [
                'ums' => '3-5',
                'strong' => 'B',
                'moderate' => 'B-C',
                'slight' => 'C',
                'cloudy' => 'D',
                'clear' => 'E',
            ],
            [
                'ums' => '5-6',
                'strong' => 'C',
                'moderate' => 'C-D',
                'slight' => 'D',
                'cloudy' => 'D',
                'clear' => 'D',
            ],
            [
                'ums' => '>6',
                'strong' => 'C',
                'moderate' => 'D',
                'slight' => 'D',
                'cloudy' => 'D',
                'clear' => 'D',
            ],
        ];
    }
}
