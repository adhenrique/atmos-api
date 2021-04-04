<?php

namespace Database\Seeders;

use App\Domain\Condition\ConditionPersistenceService;

class ConditionSeeder extends TableSeeder
{
    public function __construct(ConditionPersistenceService $conditionPersistenceService)
    {
        $this->service = $conditionPersistenceService;
        $this->data = [
            [
                'name' => 'Strong',
            ],
            [
                'name' => 'Moderate',
            ],
            [
                'name' => 'Slight',
            ],
            [
                'name' => 'Cloudy',
            ],
            [
                'name' => 'Clear',
            ],
        ];
    }
}
