<?php

namespace App\Http\Controllers;

use App\Domain\StabilityClassification\SelectResource;
use App\Domain\StabilityClassification\StabilityClassificationPersistenceService;
use App\Domain\StabilityClassification\StabilityClassificationResource;
use App\Domain\StabilityClassification\StabilityClassificationSearchService;
use App\Domain\StabilityClassification\StabilityClassificationValidateService;
use Illuminate\Http\Request;
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

    public function listConditionsByTime(Request $request, int $timeId)
    {
        $this->authorize('listConditionsByTime', $this->searchService->getTableName());

        $data = $this->searchService->listConditionsByTime($request, $timeId);
        return SelectResource::collection($data);
    }
}
