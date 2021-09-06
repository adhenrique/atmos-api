<?php

namespace App\Exceptions;

use Exception;

class PasswordDoesNotMatchException extends Exception
{
    public function render()
    {
        $data = [
            'message' => 'The password provided is wrong.',
            'exception' => get_class($this),
        ];

        return response()->json($data, 403);
    }
}
