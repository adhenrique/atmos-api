<?php

namespace App\Domain\Calc;

use LaravelDomainOriented\Models\PersistenceModel;

class CalcPersistenceModel extends PersistenceModel
{
    protected $table = 'calcs';

    protected $fillable = [
        'calc',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->user_id = auth()->id();
        });
    }

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
