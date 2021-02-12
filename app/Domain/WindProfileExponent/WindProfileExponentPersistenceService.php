<?php

namespace App\Domain\WindProfileExponent;

use LaravelDomainOriented\Services\PersistenceService;
use LaravelDomainOriented\Models\PersistenceModel;

class WindProfileExponentPersistenceService extends PersistenceService
{
    protected PersistenceModel $model;

    public function __construct(WindProfileExponentPersistenceModel $model)
    {
        $this->model = $model;
    }
}
