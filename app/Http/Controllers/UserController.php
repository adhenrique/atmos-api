<?php

namespace App\Http\Controllers;

use App\Domain\User\UserPersistenceService;
use App\Domain\User\UserResource;
use App\Domain\User\UserSearchService;
use App\Domain\User\UserValidateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function me()
    {
        $auth = Auth::id();

        $data = $this->searchService->findById($auth);
        return new $this->resource($data);
    }

    public function updateMe(Request $request): JsonResponse
    {
        $id = Auth::id();

        return $this->update($request, $id);
    }
}
