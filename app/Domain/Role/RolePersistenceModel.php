<?php

namespace App\Domain\Role;

use LaravelDomainOriented\Models\PersistenceModel;

class RolePersistenceModel extends PersistenceModel
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
