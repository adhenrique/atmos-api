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
use LaravelDomainOriented\Services\ValidateService;

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

    public function updateMe(Request $request)
    {
        $id = Auth::id();
        $this->authorize('updateMe', [$this->persistenceService->getTableName(), $id]);

        $request = $request->merge(['id' => $id]);
        $validatedData = $this->validateService->handle($request->all(), 'updateMe');

        $isUpdated = $this->persistenceService->updateMe($validatedData);
        return $this->response(['isUpdated' => $isUpdated]);
    }

    public function register(Request $request): JsonResponse
    {
        $validatedData = $this->validateService->handle($request->all(), 'register');
        $id = $this->persistenceService->register($validatedData);
        return $this->response(['id' => $id]);
    }

    public function active(int $userId)
    {
        $validatedData = $this->validateService->handle(['id' => $userId], UserValidateService::DESTROY);
        $id = $this->persistenceService->active($validatedData);
        return $this->response(['id' => $id]);
    }

    public function inactive(int $userId)
    {
        $validatedData = $this->validateService->handle(['id' => $userId], UserValidateService::DESTROY);
        $id = $this->persistenceService->inactive($validatedData);
        return $this->response(['id' => $id]);
    }
}
