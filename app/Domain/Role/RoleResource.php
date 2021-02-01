<?php

namespace App\Domain\Role;

use LaravelDomainOriented\Resource\Resource;

class RoleResource extends Resource
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
