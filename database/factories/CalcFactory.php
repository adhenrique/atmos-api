<?php

namespace Database\Factories;

use App\Domain\Calc\CalcPersistenceModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CalcFactory extends Factory
{
    protected $model = CalcPersistenceModel::class;

    public function definition()
    {
        return [
            //
        ];
    }
}
