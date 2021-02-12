<?php

namespace App\Domain\Glossary;

use LaravelDomainOriented\Models\PersistenceModel;

class GlossaryPersistenceModel extends PersistenceModel
{
    protected $table = 'glossaries';

    protected $fillable = [
        'name',
        'description',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
