<?php

namespace App\Domain\User;

use LaravelDomainOriented\Models\PersistenceModel;

class UserPersistenceModel extends PersistenceModel
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
