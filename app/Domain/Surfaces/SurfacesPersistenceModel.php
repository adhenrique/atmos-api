<?php

namespace App\Domain\Surfaces;

use LaravelDomainOriented\Models\PersistenceModel;

class SurfacesPersistenceModel extends PersistenceModel
{
    protected $table = 'surfaces';

    protected $fillable = [
        'name',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
