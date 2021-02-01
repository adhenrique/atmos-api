<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

abstract class TableSeeder extends Seeder
{
    protected $service;
    protected $data = [];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $item) {
            $this->service->store($item);
        }

        $this->guessFactoryName();
        $this->runFactory();
    }

    protected function runFactory()
    {
        //
    }

    private function guessFactoryName()
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $modelName = str_replace('PersistenceModel', '', class_basename($modelName));
            return 'Database\\Factories\\' . $modelName . 'Factory';
        });
    }
}
