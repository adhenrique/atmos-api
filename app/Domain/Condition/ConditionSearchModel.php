<?php

namespace App\Domain\Condition;

use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class ConditionSearchModel extends SearchModel
{
    protected $table = 'conditions';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }
}
