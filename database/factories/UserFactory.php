<?php

namespace Database\Factories;

use App\Domain\User\UserPersistenceModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = UserPersistenceModel::class;

    public function definition()
    {
        return [
            //
        ];
    }
}
