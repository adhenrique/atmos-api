<?php

namespace Database\Seeders;

use App\Domain\Role\RolePersistenceService;

class RoleSeeder extends TableSeeder
{
    public function __construct(RolePersistenceService $rolePersistenceService)
    {
        $this->service = $rolePersistenceService;
        $this->data = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Student',
            ],
        ];
    }
}
