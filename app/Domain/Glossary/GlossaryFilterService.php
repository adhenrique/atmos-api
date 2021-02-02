<?php

namespace App\Domain\Glossary;

use LaravelDomainOriented\Services\FilterService;

class GlossaryFilterService extends FilterService
{
    protected array $fields = ['id', 'name'];
}
