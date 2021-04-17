<?php

namespace App\Domain\Calc;

use LaravelDomainOriented\Models\SearchModel;

class CalcSearchModel extends SearchModel
{
    protected $table = 'calcs';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
