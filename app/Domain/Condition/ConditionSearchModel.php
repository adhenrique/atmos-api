<?php

namespace App\Domain\Condition;

use LaravelDomainOriented\Models\SearchModel;

class ConditionSearchModel extends SearchModel
{
    protected $table = 'conditions';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
