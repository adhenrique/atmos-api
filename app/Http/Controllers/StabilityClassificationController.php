<?php

namespace App\Http\Controllers;

use App\Domain\StabilityClassification\StabilityClassificationPersistenceService;
use App\Domain\StabilityClassification\StabilityClassificationResource;
use App\Domain\StabilityClassification\StabilityClassificationSearchService;
use App\Domain\StabilityClassification\StabilityClassificationValidateService;
use LaravelDomainOriented\Controller\Controller;

class StabilityClassificationController extends Controller
{
    protected $resource = StabilityClassificationResource::class;

    public function __construct(
        StabilityClassificationPersistenceService $persistenceService,
        StabilityClassificationSearchService $searchService,
        StabilityClassificationValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
