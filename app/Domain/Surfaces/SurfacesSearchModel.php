<?php

namespace App\Domain\Surfaces;

use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class SurfacesSearchModel extends SearchModel
{
    protected $table = 'surfaces';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }
}
