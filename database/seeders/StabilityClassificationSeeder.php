<?php

namespace Database\Seeders;

use App\Domain\StabilityClassification\StabilityClassificationPersistenceModel;

class StabilityClassificationSeeder extends TableSeeder
{
    protected function runFactory()
    {
        StabilityClassificationPersistenceModel::factory()->count(5)->create();
    }
}
