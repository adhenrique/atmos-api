<?php

namespace App\Domain\Glossary;

use LaravelDomainOriented\Models\SearchModel;

class GlossarySearchModel extends SearchModel
{
    protected $table = 'glossaries';

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }
}
