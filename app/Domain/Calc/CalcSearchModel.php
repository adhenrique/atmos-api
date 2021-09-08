<?php

namespace App\Domain\Calc;

use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class CalcSearchModel extends SearchModel
{
    protected $table = 'calcs';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }
}
