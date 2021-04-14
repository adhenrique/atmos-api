<?php

namespace App\Domain\WindProfileExponent;

use LaravelDomainOriented\Resource\Resource;

class WindProfileExponentResource extends Resource
{
    public function data(): array
    {
        $data = [
            'id' => $this->id,
            'stability_class' => $this->stability_class,
            'value' => $this->value,
            'surface_id' => $this->surface_id,
            'surface' => $this->surface,
            'surfaceName' => $this->surface->name,
        ];

        return $data;
    }
}
