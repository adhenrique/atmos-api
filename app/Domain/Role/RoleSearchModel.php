<?php

namespace App\Domain\Role;

use LaravelDomainOriented\Models\SearchModel;

class RoleSearchModel extends SearchModel
{
    protected $table = 'roles';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
