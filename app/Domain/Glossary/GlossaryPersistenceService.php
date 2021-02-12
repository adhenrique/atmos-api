<?php

namespace App\Domain\Glossary;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class GlossaryPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(GlossaryPersistenceModel $model)
    {
        $this->model = $model;
    }
}
