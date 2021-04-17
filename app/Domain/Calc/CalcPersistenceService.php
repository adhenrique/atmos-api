<?php

namespace App\Domain\Calc;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class CalcPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(CalcPersistenceModel $model)
    {
        $this->model = $model;
    }
}
