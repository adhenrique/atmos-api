<?php

namespace App\Domain\StabilityClassification;

use LaravelDomainOriented\Resource\Resource;

class StabilityClassificationResource extends Resource
{
    public function data(): array
    {
        $data = [
            'id' => $this->id,
            'ums' => $this->ums,
            'strong' => $this->strong,
            'moderate' => $this->moderate,
            'slight' => $this->slight,
            'cloudy' => $this->cloudy,
            'clear' => $this->clear,
        ];

        return $data;
    }
}
