<?php

namespace App\Domain\WindProfileExponent;

use App\Domain\Surfaces\SurfacesSearchModel;
use LaravelDomainOriented\Models\SearchModel;

class WindProfileExponentSearchModel extends SearchModel
{
    protected $table = 'wind_profile_exponents';

    protected $casts = [
        'rough' => 'float',
        'smooth' => 'float',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }

    public function surface()
    {
        return $this->belongsTo(SurfacesSearchModel::class);
    }
}
