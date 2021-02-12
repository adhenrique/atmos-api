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
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'd' => $this->d,
            'f' => $this->f,
            'is_bigger_than_one_km' => $this->is_bigger_than_one_km,
        ];

        return $data;
    }
}
