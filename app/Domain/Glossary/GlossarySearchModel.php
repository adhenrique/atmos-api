<?php

namespace App\Domain\Glossary;

use App\Scopes\NoDeletedScope;
use LaravelDomainOriented\Models\SearchModel;

class GlossarySearchModel extends SearchModel
{
    protected $table = 'glossaries';

    protected static function booted()
    {
        static::addGlobalScope(new NoDeletedScope);
    }
}
