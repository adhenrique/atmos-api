<?php

namespace App\Domain\User;

use LaravelDomainOriented\Models\SearchModel;

class UserSearchModel extends SearchModel
{
    protected $table = 'users';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
