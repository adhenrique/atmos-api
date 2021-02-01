<?php

namespace App\Domain\User;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class UserPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(UserPersistenceModel $model)
    {
        $this->model = $model;
    }
}
