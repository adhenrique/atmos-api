<?php

namespace App\Domain\Role;

use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class RoleSearchModel extends SearchModel
{
    protected $table = 'roles';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }
}
