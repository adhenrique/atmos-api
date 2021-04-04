<?php

namespace App\Domain\Surfaces;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class SurfacesPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(SurfacesPersistenceModel $model)
    {
        $this->model = $model;
    }
}
