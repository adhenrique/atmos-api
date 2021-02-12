<?php

namespace App\Domain\User;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Builder;
use LaravelDomainOriented\Services\SearchService;
use LaravelDomainOriented\Models\SearchModel;
use LaravelDomainOriented\Services\FilterService;

class UserSearchService extends SearchService
{
    protected SearchModel $model;
    protected FilterService $filterService;

    public function __construct(UserSearchModel $model, UserFilterService $filterService)
    {
        $this->model = $model;
        $this->filterService = $filterService;
    }

    public function beforeAll(Builder $builder, Guard $auth): Builder
    {
        if ($auth) {
            $builder->where('id', '<>', $auth->id());
        }

        return parent::beforeAll($builder, $auth);
    }

    public function findByEmail(string $email)
    {
        return $this->model->query()->where('email', $email)->first();
    }
}
