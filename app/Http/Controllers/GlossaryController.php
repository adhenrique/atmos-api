<?php

namespace App\Http\Controllers;

use App\Domain\Glossary\GlossaryPersistenceService;
use App\Domain\Glossary\GlossaryResource;
use App\Domain\Glossary\GlossarySearchService;
use App\Domain\Glossary\GlossaryValidateService;
use LaravelDomainOriented\Controller\Controller;

class GlossaryController extends Controller
{
    protected $resource = GlossaryResource::class;

    public function __construct(
        GlossaryPersistenceService $persistenceService,
        GlossarySearchService $searchService,
        GlossaryValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
