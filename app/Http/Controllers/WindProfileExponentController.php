<?php

namespace App\Http\Controllers;

use App\Domain\WindProfileExponent\WindProfileExponentPersistenceService;
use App\Domain\WindProfileExponent\WindProfileExponentResource;
use App\Domain\WindProfileExponent\WindProfileExponentSearchService;
use App\Domain\WindProfileExponent\WindProfileExponentValidateService;
use LaravelDomainOriented\Controller\Controller;

class WindProfileExponentController extends Controller
{
    protected $resource = WindProfileExponentResource::class;

    public function __construct(
        WindProfileExponentPersistenceService $persistenceService,
        WindProfileExponentSearchService $searchService,
        WindProfileExponentValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
