<?php

namespace App\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    public function render()
    {
        $data = [
            'message' => 'unauthorized',
            'exception' => get_class($this),
        ];

        return response()->json($data, 401);
    }
}
