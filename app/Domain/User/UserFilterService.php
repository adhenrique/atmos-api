<?php

namespace App\Domain\User;

use LaravelDomainOriented\Services\FilterService;

class UserFilterService extends FilterService
{
    protected array $fields = ['id', 'name', 'email', 'status'];
}
