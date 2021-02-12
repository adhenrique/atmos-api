<?php

namespace App\Domain\CurveFitConstant;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class CurveFitConstantPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(CurveFitConstantPersistenceModel $model)
    {
        $this->model = $model;
    }
}
