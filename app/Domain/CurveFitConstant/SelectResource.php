<?php

namespace App\Domain\CurveFitConstant;

use Illuminate\Http\Resources\Json\JsonResource;

class SelectResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->stability_class,
            'name' => $this->stability_class,
        ];
    }
}
