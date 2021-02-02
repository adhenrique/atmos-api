<?php

namespace App\Domain\WindProfileExponent;

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
}
