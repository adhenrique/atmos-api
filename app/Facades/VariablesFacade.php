<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class VariablesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'variables';
    }
}
