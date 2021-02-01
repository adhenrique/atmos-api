<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $seeders = [
        RoleSeeder::class,
        UserSeeder::class,
    ];

    public function run()
    {
        $this->call($this->seeders);
    }
}
