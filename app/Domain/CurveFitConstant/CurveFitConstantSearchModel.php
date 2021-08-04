<?php

namespace App\Domain\CurveFitConstant;

use App\Domain\DistanceOperator\DistanceOperatorSearchModel;
use LaravelDomainOriented\Models\SearchModel;

class CurveFitConstantSearchModel extends SearchModel
{
    protected $table = 'curve_fit_constants';

    protected $casts = [
        'a' => 'float',
        'b' => 'float',
        'c' => 'float',
        'd' => 'float',
        'f' => 'float',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }

    public function distanceOperator()
    {
        return $this->belongsTo(DistanceOperatorSearchModel::class);
    }
}
