<?php

namespace App\Helpers;

class Variables
{
    public function config($index)
    {
        return config("variables.{$index}");
    }
}
