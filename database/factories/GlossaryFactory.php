<?php

namespace Database\Factories;

use App\Domain\Glossary\GlossaryPersistenceModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GlossaryFactory extends Factory
{
    protected $model = GlossaryPersistenceModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}
