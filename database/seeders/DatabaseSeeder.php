<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $seeders = [
        RoleSeeder::class,
        UserSeeder::class,
        GlossarySeeder::class,
        StabilityClassificationSeeder::class,
    ];

    public function run()
    {
        $this->call($this->seeders);
    }
}
