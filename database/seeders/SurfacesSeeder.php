<?php

namespace Database\Seeders;

use App\Domain\Surfaces\SurfacesPersistenceService;

class SurfacesSeeder extends TableSeeder
{
    public function __construct(SurfacesPersistenceService $surfacesPersistenceService)
    {
        $this->service = $surfacesPersistenceService;
        $this->data = [
            [
                'name' => 'Rough',
                'value' => 'urban',
            ],
            [
                'name' => 'Smooth',
                'value' => 'rural',
            ],
        ];
    }
}
