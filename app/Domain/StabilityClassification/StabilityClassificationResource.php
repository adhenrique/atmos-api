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
            'class' => $this->class,
            'time_id' => $this->time_id,
            'condition_id' => $this->condition_id,
            'condition' => $this->condition,
            'conditionName' => $this->condition->name,
        ];

        return $data;
    }
}
