<?php

namespace App\Domain\CurveFitConstant;

use LaravelDomainOriented\Models\PersistenceModel;

class CurveFitConstantPersistenceModel extends PersistenceModel
{
    protected $table = 'curve_fit_constants';

    protected $fillable = [
        'stability_class',
        'a',
        'b',
        'c',
        'd',
        'f',
        'is_bigger_than_one_km',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
