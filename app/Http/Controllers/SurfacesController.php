<?php

namespace App\Http\Controllers;

use App\Domain\Surfaces\SurfacesPersistenceService;
use App\Domain\Surfaces\SurfacesResource;
use App\Domain\Surfaces\SurfacesSearchService;
use App\Domain\Surfaces\SurfacesValidateService;
use LaravelDomainOriented\Controller\Controller;

class SurfacesController extends Controller
{
    protected $resource = SurfacesResource::class;

    public function __construct(
        SurfacesPersistenceService $persistenceService,
        SurfacesSearchService $searchService,
        SurfacesValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
