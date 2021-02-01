<?php

namespace App\Http\Controllers;

use App\Domain\User\UserPersistenceService;
use App\Domain\User\UserResource;
use App\Domain\User\UserSearchService;
use App\Domain\User\UserValidateService;
use LaravelDomainOriented\Controller\Controller;

class UserController extends Controller
{
    protected $resource = UserResource::class;

    public function __construct(
        UserPersistenceService $persistenceService,
        UserSearchService $searchService,
        UserValidateService $validateService
    ) {
        $this->persistenceService = $persistenceService;
        $this->searchService = $searchService;
        $this->validateService = $validateService;
    }
}
