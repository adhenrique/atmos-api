<?php

namespace App\Domain\DistanceOperator;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class DistanceOperatorPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(DistanceOperatorPersistenceModel $model)
    {
        $this->model = $model;
    }
}
