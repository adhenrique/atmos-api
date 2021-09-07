<?php

namespace App\Domain\User;

use App\Domain\Role\RoleSearchModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;
use LaravelDomainOriented\Models\SearchModel;
use App\Notifications\PasswordReset;

class UserSearchModel extends SearchModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail, SoftDeletes, Notifiable;

    protected $table = 'users';
    protected $dates = ['access_period_end_date'];

    public function role()
    {
        return $this->belongsTo(RoleSearchModel::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token, $this->name));
    }
}
