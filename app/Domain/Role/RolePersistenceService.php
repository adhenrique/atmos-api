<?php

namespace App\Domain\Role;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class RolePersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(RolePersistenceModel $model)
    {
        $this->model = $model;
    }
}
