<?php

namespace App\Domain\StabilityClassification;

use App\Domain\Condition\ConditionSearchModel;
use App\Domain\Time\TimeSearchModel;
use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class StabilityClassificationSearchModel extends SearchModel
{
    protected $table = 'stability_classifications';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
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
