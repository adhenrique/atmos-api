<?php

namespace App\Domain\Time;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class TimePersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(TimePersistenceModel $model)
    {
        $this->model = $model;
    }
}
