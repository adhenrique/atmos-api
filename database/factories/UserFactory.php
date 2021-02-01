<?php

namespace Database\Factories;

use App\Domain\User\UserPersistenceModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = UserPersistenceModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => Hash::make(12345678),
            'access_period_start_date' => now(),
            'access_period_end_date' => now()->add('1 year'),
        ];
    }
}
