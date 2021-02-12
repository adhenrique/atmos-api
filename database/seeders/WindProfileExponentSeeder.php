<?php

namespace Database\Seeders;

use App\Domain\WindProfileExponent\WindProfileExponentPersistenceService;

class WindProfileExponentSeeder extends TableSeeder
{
    public function __construct(WindProfileExponentPersistenceService $windProfileExponentPersistenceService)
    {
        $this->service = $windProfileExponentPersistenceService;
        $this->data = [
            [
                'stability_class' => 'A',
                'rough' => 0.15,
                'smooth' => 0.07,
            ],
            [
                'stability_class' => 'B',
                'rough' => 0.15,
                'smooth' => 0.07,
            ],
            [
                'stability_class' => 'C',
                'rough' => 0.2,
                'smooth' => 0.1,
            ],
            [
                'stability_class' => 'D',
                'rough' => 0.25,
                'smooth' => 0.15,
            ],
            [
                'stability_class' => 'E',
                'rough' => 0.3,
                'smooth' => 0.35,
            ],
            [
                'stability_class' => 'F',
                'rough' => 0.3,
                'smooth' => 0.35,
            ],
        ];
    }
}
