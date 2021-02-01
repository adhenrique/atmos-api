<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DatabaseRefresh extends Command
{
    protected $signature = 'db:refresh';

    protected $description = 'Refresh Database with seeds';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Artisan::call('migrate:refresh', ['-vvv' => true, '--seed' => true]);
        $this->info('Finish Refresh and Seed');
    }
}
