<?php

namespace App\Domain\CurveFitConstant;

use App\Domain\DistanceOperator\DistanceOperatorSearchModel;
use App\Scopes\NoDeletedScope;
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

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }

    public function distanceOperator()
    {
        return $this->belongsTo(DistanceOperatorSearchModel::class);
    }
}
