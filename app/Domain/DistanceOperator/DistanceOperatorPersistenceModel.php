<?php

namespace App\Domain\DistanceOperator;

use LaravelDomainOriented\Models\PersistenceModel;

class DistanceOperatorPersistenceModel extends PersistenceModel
{
    protected $table = 'distance_operators';

    protected $fillable = [
        'name',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
