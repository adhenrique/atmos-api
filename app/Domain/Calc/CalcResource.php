<?php

namespace App\Domain\Calc;

use LaravelDomainOriented\Resource\Resource;

class CalcResource extends Resource
{
    public function data(): array
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
        ];

        return $data;
    }
}
