<?php

namespace App\Domain\Condition;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class ConditionPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(ConditionPersistenceModel $model)
    {
        $this->model = $model;
    }
}
