<?php

namespace App\Domain\Time;

use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class TimeSearchModel extends SearchModel
{
    protected $table = 'times';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }
}
