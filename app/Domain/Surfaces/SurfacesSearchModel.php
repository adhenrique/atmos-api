<?php

namespace App\Domain\Surfaces;

use LaravelDomainOriented\Models\SearchModel;

class SurfacesSearchModel extends SearchModel
{
    protected $table = 'surfaces';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
