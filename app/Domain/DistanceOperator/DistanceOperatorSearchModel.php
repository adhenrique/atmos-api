<?php

namespace App\Domain\DistanceOperator;

use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class DistanceOperatorSearchModel extends SearchModel
{
    protected $table = 'distance_operators';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }
}
