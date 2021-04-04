<?php

namespace Database\Seeders;

use App\Domain\DistanceOperator\DistanceOperatorPersistenceService;

class DistanceOperatorSeeder extends TableSeeder
{
    public function __construct(DistanceOperatorPersistenceService $distanceOperatorPersistenceService)
    {
        $this->service = $distanceOperatorPersistenceService;
        $this->data = [
            [
                'name' => 'na',
            ],
            [
                'name' => 'x < 1km',
                'operator' => '<',
            ],
            [
                'name' => 'x > 1km',
                'operator' => '>',
            ],
            [
                'name' => 'x = 1km',
                'operator' => '=',
            ],
        ];
    }
}
