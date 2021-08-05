<?php

namespace App\Facades;

use App\Helpers\Variables;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Variables config(string $index, string $default = null);
 */
class VariablesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'variables';
    }
}
