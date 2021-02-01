<?php

namespace App\Domain\Role;

use LaravelDomainOriented\Services\FilterService;

class RoleFilterService extends FilterService
{
    protected array $fields = ['id', 'name'];
}
