<?php

namespace App\Http\Controllers;

use App\Domain\Role\RolePersistenceService;
use App\Domain\Role\RoleResource;
use App\Domain\Role\RoleSearchService;
use App\Domain\Role\RoleValidateService;
use LaravelDomainOriented\Controller\Controller;

class RoleController extends Controller
{
    protected $resource = RoleResource::class;

    public function __construct(
        RolePersistenceService $persistenceService,
        RoleSearchService $searchService,
        RoleValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
