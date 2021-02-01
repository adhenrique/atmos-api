<?php

namespace App\Domain\User;

use LaravelDomainOriented\Resource\Resource;

class UserResource extends Resource
{
    public function data(): array
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'access_period_start_date' => $this->access_period_start_date,
            'access_period_end_date' => $this->access_period_end_date,
        ];

        return $data;
    }
}
