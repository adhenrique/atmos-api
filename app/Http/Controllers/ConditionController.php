<?php

namespace App\Http\Controllers;

use App\Domain\Condition\ConditionPersistenceService;
use App\Domain\Condition\ConditionResource;
use App\Domain\Condition\ConditionSearchService;
use App\Domain\Condition\ConditionValidateService;
use LaravelDomainOriented\Controller\Controller;

class ConditionController extends Controller
{
    protected $resource = ConditionResource::class;

    public function __construct(
        ConditionPersistenceService $persistenceService,
        ConditionSearchService $searchService,
        ConditionValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
