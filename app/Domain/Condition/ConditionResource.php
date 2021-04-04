<?php

namespace App\Domain\Condition;

use LaravelDomainOriented\Resource\Resource;

class ConditionResource extends Resource
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
