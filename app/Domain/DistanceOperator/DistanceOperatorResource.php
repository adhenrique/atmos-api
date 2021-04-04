<?php

namespace App\Domain\DistanceOperator;

use LaravelDomainOriented\Resource\Resource;

class DistanceOperatorResource extends Resource
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
