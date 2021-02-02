<?php

namespace Database\Factories;

use App\Domain\StabilityClassification\StabilityClassificationPersistenceModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StabilityClassificationFactory extends Factory
{
    protected $model = StabilityClassificationPersistenceModel::class;

    public function definition()
    {
        return [
            'ums' => $this->faker->name,
            'strong' => strtoupper($this->faker->randomLetter),
            'moderate' => strtoupper($this->faker->randomLetter),
            'slight' => strtoupper($this->faker->randomLetter),
            'cloudy' => strtoupper($this->faker->randomLetter),
            'clear' => strtoupper($this->faker->randomLetter),
        ];
    }
}
