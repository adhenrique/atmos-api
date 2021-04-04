<?php

namespace App\Http\Controllers;

use App\Domain\Time\TimePersistenceService;
use App\Domain\Time\TimeResource;
use App\Domain\Time\TimeSearchService;
use App\Domain\Time\TimeValidateService;
use LaravelDomainOriented\Controller\Controller;

class TimeController extends Controller
{
    protected $resource = TimeResource::class;

    public function __construct(
        TimePersistenceService $persistenceService,
        TimeSearchService $searchService,
        TimeValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
