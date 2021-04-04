<?php

namespace App\Domain\CurveFitConstant;

use LaravelDomainOriented\Resource\Resource;

class CurveFitConstantResource extends Resource
{
    public function data(): array
    {
        $data = [
            'id' => $this->id,
            'stability_class' => $this->stability_class,
            'constant' => $this->constant,
            'value' => $this->value,
            'distance_operator_id' => $this->distance_operator_id,
        ];

        return $data;
    }
}
