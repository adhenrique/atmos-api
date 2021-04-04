<?php

namespace Database\Seeders;

use App\Domain\Time\TimePersistenceService;

class TimeSeeder extends TableSeeder
{
    public function __construct(TimePersistenceService $timePersistenceService)
    {
        $this->service = $timePersistenceService;
        $this->data = [
            [
                'name' => 'Day',
            ],
            [
                'name' => 'Night',
            ],
        ];
    }
}
