<?php

namespace App\Domain\Glossary;

use LaravelDomainOriented\Resource\Resource;

class GlossaryResource extends Resource
{
    public function data(): array
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        ];

        return $data;
    }
}
