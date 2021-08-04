<?php

namespace App\Domain\StabilityClassification;

use App\Domain\Condition\ConditionSearchModel;
use App\Domain\Time\TimeSearchModel;
use LaravelDomainOriented\Models\SearchModel;

class StabilityClassificationSearchModel extends SearchModel
{
    protected $table = 'stability_classifications';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }

    public function condition()
    {
        return $this->belongsTo(ConditionSearchModel::class);
    }

    public function time()
    {
        return $this->belongsTo(TimeSearchModel::class);
    }
}
