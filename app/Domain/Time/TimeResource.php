<?php

namespace App\Domain\Time;

use LaravelDomainOriented\Resource\Resource;

class TimeResource extends Resource
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
