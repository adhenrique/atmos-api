<?php

namespace App\Http\Controllers;

use App\Domain\CurveFitConstant\CurveFitConstantPersistenceService;
use App\Domain\CurveFitConstant\CurveFitConstantResource;
use App\Domain\CurveFitConstant\CurveFitConstantSearchService;
use App\Domain\CurveFitConstant\CurveFitConstantValidateService;
use LaravelDomainOriented\Controller\Controller;

class CurveFitConstantController extends Controller
{
    protected $resource = CurveFitConstantResource::class;

    public function __construct(
        CurveFitConstantPersistenceService $persistenceService,
        CurveFitConstantSearchService $searchService,
        CurveFitConstantValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
