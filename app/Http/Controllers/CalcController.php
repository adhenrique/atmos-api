<?php

namespace App\Http\Controllers;

use App\Domain\Calc\CalcPersistenceService;
use App\Domain\Calc\CalcResource;
use App\Domain\Calc\CalcSearchService;
use App\Domain\Calc\CalcValidateService;
use LaravelDomainOriented\Controller\Controller;

class CalcController extends Controller
{
    protected $resource = CalcResource::class;

    public function __construct(
        CalcPersistenceService $persistenceService,
        CalcSearchService $searchService,
        CalcValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
