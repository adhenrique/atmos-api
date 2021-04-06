<?php

namespace App\Domain\StabilityClassification;

use Illuminate\Http\Resources\Json\JsonResource;

class SelectResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
