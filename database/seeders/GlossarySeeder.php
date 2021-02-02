<?php

namespace Database\Seeders;

use App\Domain\Glossary\GlossaryPersistenceModel;

class GlossarySeeder extends TableSeeder
{
    protected function runFactory()
    {
        GlossaryPersistenceModel::factory()->count(5)->create();
    }
}
