<?php

namespace App\Domain\WindProfileExponent;

use LaravelDomainOriented\Models\PersistenceModel;

class WindProfileExponentPersistenceModel extends PersistenceModel
{
    protected $table = 'wind_profile_exponents';

    protected $fillable = [
        'stability_class',
        'rough',
        'smooth',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
