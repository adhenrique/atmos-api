<?php

namespace App\Domain\StabilityClassification;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class StabilityClassificationPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(StabilityClassificationPersistenceModel $model)
    {
        $this->model = $model;
    }
}
