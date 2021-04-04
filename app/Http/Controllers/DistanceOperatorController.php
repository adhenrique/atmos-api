<?php

namespace App\Http\Controllers;

use App\Domain\DistanceOperator\DistanceOperatorPersistenceService;
use App\Domain\DistanceOperator\DistanceOperatorResource;
use App\Domain\DistanceOperator\DistanceOperatorSearchService;
use App\Domain\DistanceOperator\DistanceOperatorValidateService;
use LaravelDomainOriented\Controller\Controller;

class DistanceOperatorController extends Controller
{
    protected $resource = DistanceOperatorResource::class;

    public function __construct(
        DistanceOperatorPersistenceService $persistenceService,
        DistanceOperatorSearchService $searchService,
        DistanceOperatorValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
