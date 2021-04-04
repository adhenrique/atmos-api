<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $seeders = [
        RoleSeeder::class,
        UserSeeder::class,
        GlossarySeeder::class,
        DistanceOperatorSeeder::class,
        StabilityClassificationSeeder::class,
        CurveFitConstantSeeder::class,
        WindProfileExponentSeeder::class,
    ];

    public function run()
    {
        $this->call($this->seeders);
    }
}
