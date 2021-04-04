<?php

namespace App\Domain\Time;

use LaravelDomainOriented\Models\PersistenceModel;

class TimePersistenceModel extends PersistenceModel
{
    protected $table = 'times';

    protected $fillable = [
        'name',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
