<?php

namespace App\Domain\Time;

use LaravelDomainOriented\Models\SearchModel;

class TimeSearchModel extends SearchModel
{
    protected $table = 'times';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
