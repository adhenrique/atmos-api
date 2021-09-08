<?php

namespace App\Domain\WindProfileExponent;

use App\Domain\Surfaces\SurfacesSearchModel;
use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class WindProfileExponentSearchModel extends SearchModel
{
    protected $table = 'wind_profile_exponents';

    protected $casts = [
        'rough' => 'float',
        'smooth' => 'float',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }

    public function surface()
    {
        return $this->belongsTo(SurfacesSearchModel::class);
    }
}
