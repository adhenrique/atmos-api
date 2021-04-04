<?php

namespace App\Domain\Surfaces;

use LaravelDomainOriented\Resource\Resource;

class SurfacesResource extends Resource
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
