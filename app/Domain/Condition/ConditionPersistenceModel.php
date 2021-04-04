<?php

namespace App\Domain\Condition;

use LaravelDomainOriented\Models\PersistenceModel;

class ConditionPersistenceModel extends PersistenceModel
{
    protected $table = 'conditions';

    protected $fillable = [
        'name',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
