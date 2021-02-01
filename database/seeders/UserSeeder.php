<?php

namespace Database\Seeders;

use App\Domain\User\UserPersistenceModel;
use App\Domain\User\UserPersistenceService;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends TableSeeder
{
    public function __construct(UserPersistenceService $userPersistenceService)
    {
        $this->service = $userPersistenceService;
        $this->data = [
            [
                'name' => 'Atmos',
                'email' => 'atmos@atmos.com.br',
                'password' => Hash::make(12345678),
                'access_period_start_date' => now(),
                'access_period_end_date' => now()->add('1 year'),
            ],
        ];
    }

    protected function runFactory()
    {
        UserPersistenceModel::factory()->count(5)->create();
    }
}
