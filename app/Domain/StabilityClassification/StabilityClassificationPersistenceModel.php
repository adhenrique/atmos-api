<?php

namespace App\Domain\StabilityClassification;

use LaravelDomainOriented\Models\PersistenceModel;

class StabilityClassificationPersistenceModel extends PersistenceModel
{
    protected $table = 'stability_classifications';

    protected $fillable = [
        'ums',
        'strong',
        'moderate',
        'slight',
        'cloudy',
        'clear',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
