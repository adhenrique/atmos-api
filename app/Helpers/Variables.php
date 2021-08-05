<?php

namespace App\Helpers;

class Variables
{
    /**
     * @param string $index
     * @param string|null $default
     * @return string|array|mixed
     */
    public function config(string $index, string $default = null)
    {
        return config("variables.{$index}", $default);
    }
}
