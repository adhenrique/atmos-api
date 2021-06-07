<?php

namespace Database\Seeders;

use App\Domain\Glossary\GlossaryPersistenceService;

class GlossarySeeder extends TableSeeder
{
    public function __construct(GlossaryPersistenceService $conditionPersistenceService)
    {
        $this->service = $conditionPersistenceService;
        $this->data = [
            [
                'name' => 'Q (g/sec)',
                'description' => 'Emission rate',
            ],
            [
                'name' => 'y (m)',
                'description' => 'Horizontal distance from the plume centerline',
            ],
            [
                'name' => 'z (m)',
                'description' => 'Vertical distance from ground level',
            ],
            [
                'name' => 'x (Km)',
                'description' => 'Horizontal distance from the stack centerline',
            ],
            [
                'name' => 'Class',
                'description' => 'Stability classification: \n A = Very unstable; \n B = Moderately; \n C = Sightly unstable; \n D = Neutral; \n E = Slightly stable; \n F = Stable;',
            ],
            [
                'name' => 'Time',
                'description' => 'Day or night',
            ],
            [
                'name' => 'Condition',
                'description' => 'If day select the incoming solar radiation, and if night select the cloudiness level',
            ],
            [
                'name' => 'u (m/s)',
                'description' => 'Average wind speed at stack height',
            ],
            [
                'name' => 'vs (m/s)',
                'description' => 'Stack gas velocity',
            ],
            [
                'name' => 'ds (m)',
                'description' => 'Stack inner diameter',
            ],
            [
                'name' => 'Pa (mb)',
                'description' => 'Atmospheric pressure',
            ],
            [
                'name' => 'Ts (K)',
                'description' => 'Stack gas temperature',
            ],
            [
                'name' => 'Ta (K)',
                'description' => 'Atmospheric temperature',
            ],
            [
                'name' => 'h (m)',
                'description' => 'Physical stack height',
            ],
            [
                'name' => 'Δh (m)',
                'description' => 'Plume rise',
            ],
            [
                'name' => 'H (m)',
                'description' => 'Effective stack height',
            ],
            [
                'name' => 'u10 (m/s)',
                'description' => 'Average wind speed at 10m',
            ],
            [
                'name' => 'Surface',
                'description' => 'Surface roughness',
            ],
            [
                'name' => 'C (μg/m3)',
                'description' => 'Steady-state concentration at a point (x,y,z)',
            ],
        ];
    }
}
