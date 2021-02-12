<?php

namespace Database\Seeders;

use App\Domain\CurveFitConstant\CurveFitConstantPersistenceService;

class CurveFitConstantSeeder extends TableSeeder
{
    public function __construct(CurveFitConstantPersistenceService $curveFitConstantPersistenceService)
    {
        $this->service = $curveFitConstantPersistenceService;
        $this->data = [
            [
                'stability_class' => 'A',
                'a' => 213,
                'b' => 0.894,
                'c' => 440.8,
                'd' => 1.941,
                'f' => 9.27,
                'is_bigger_than_one_km' => 0,
            ],
            [
                'stability_class' => 'A',
                'a' => 213,
                'b' => 0.894,
                'c' => 459.7,
                'd' => 2.094,
                'f' => -9.6,
                'is_bigger_than_one_km' => 1,
            ],
            [
                'stability_class' => 'B',
                'a' => 156,
                'b' => 0.894,
                'c' => 106.6,
                'd' => 1.149,
                'f' => 3.3,
                'is_bigger_than_one_km' => 0,
            ],
            [
                'stability_class' => 'B',
                'a' => 156,
                'b' => 0.894,
                'c' => 108.2,
                'd' => 1.098,
                'f' => 2,
                'is_bigger_than_one_km' => 1,
            ],
            [
                'stability_class' => 'C',
                'a' => 104,
                'b' => 0.894,
                'c' => 61,
                'd' => 0.911,
                'f' => 0,
                'is_bigger_than_one_km' => 0,
            ],
            [
                'stability_class' => 'C',
                'a' => 104,
                'b' => 0.894,
                'c' => 61,
                'd' => 0.911,
                'f' => 0,
                'is_bigger_than_one_km' => 1,
            ],
            [
                'stability_class' => 'D',
                'a' => 68,
                'b' => 0.894,
                'c' => 33.2,
                'd' => 0.725,
                'f' => -1.7,
                'is_bigger_than_one_km' => 0,
            ],
            [
                'stability_class' => 'D',
                'a' => 68,
                'b' => 0.894,
                'c' => 44.5,
                'd' => 0.516,
                'f' => -13,
                'is_bigger_than_one_km' => 1,
            ],
            [
                'stability_class' => 'E',
                'a' => 50.5,
                'b' => 0.894,
                'c' => 22.8,
                'd' => 0.678,
                'f' => -1.3,
                'is_bigger_than_one_km' => 0,
            ],
            [
                'stability_class' => 'E',
                'a' => 50.5,
                'b' => 0.894,
                'c' => 55.4,
                'd' => 0.305,
                'f' => -34,
                'is_bigger_than_one_km' => 1,
            ],
            [
                'stability_class' => 'F',
                'a' => 34,
                'b' => 0.894,
                'c' => 14.35,
                'd' => 0.74,
                'f' => -0.35,
                'is_bigger_than_one_km' => 0,
            ],
            [
                'stability_class' => 'F',
                'a' => 34,
                'b' => 0.894,
                'c' => 62.6,
                'd' => 0.18,
                'f' => 48.6,
                'is_bigger_than_one_km' => 1,
            ],
        ];
    }
}
