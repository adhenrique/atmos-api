<?php

namespace App\Domain\DistanceOperator;

use LaravelDomainOriented\Models\SearchModel;

class DistanceOperatorSearchModel extends SearchModel
{
    protected $table = 'distance_operators';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
