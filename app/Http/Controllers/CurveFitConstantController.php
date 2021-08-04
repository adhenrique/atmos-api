<?php

namespace App\Http\Controllers;

use App\Domain\CurveFitConstant\CurveFitConstantPersistenceService;
use App\Domain\CurveFitConstant\CurveFitConstantResource;
use App\Domain\CurveFitConstant\CurveFitConstantSearchService;
use App\Domain\CurveFitConstant\CurveFitConstantValidateService;
use App\Domain\CurveFitConstant\SelectResource;
use Illuminate\Http\Request;
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

    public function listStabilityClasses(Request $request)
    {
        $this->authorize('listStabilityClasses', $this->searchService->getTableName());

        $data = $this->searchService->listStabilityClasses($request);
        return SelectResource::collection($data);
    }

    public function listGrouped()
    {
        $data = $this->searchService->listGrouped();

        return $this->response($data);
    }
}
