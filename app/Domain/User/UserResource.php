<?php

namespace App\Domain\User;

use App\Facades\VariablesFacade;
use LaravelDomainOriented\Resource\Resource;

class UserResource extends Resource
{
    public function data(): array
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'access_period_end_date' => $this->access_period_end_date->format('Y-m-d'),
            'role_id' => [
                'label' => $this->role->name,
                'value' => $this->role_id,
            ],
            'status' => [
                'label' => VariablesFacade::config("status.{$this->status}"),
                'value' => $this->status,
            ],
        ];

        return $data;
    }
}
