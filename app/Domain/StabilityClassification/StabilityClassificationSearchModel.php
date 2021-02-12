<?php

namespace App\Domain\StabilityClassification;

use LaravelDomainOriented\Models\SearchModel;

class StabilityClassificationSearchModel extends SearchModel
{
    protected $table = 'stability_classifications';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
