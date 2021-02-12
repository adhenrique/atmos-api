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
            'rough' => $this->rough,
            'smooth' => $this->smooth,
        ];

        return $data;
    }
}
