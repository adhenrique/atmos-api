<?php

namespace App\Domain\User;

use Illuminate\Support\Facades\Hash;
use LaravelDomainOriented\Models\PersistenceModel;
use Spatie\Activitylog\Traits\LogsActivity;

class UserPersistenceModel extends PersistenceModel
{
    use LogsActivity;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'access_period_end_date',
        'role_id',
        'status',
    ];

    protected static $logAttributes = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    // SCOPES
    public function scopeDefault($query)
    {
        return $query->whereNull('inactivated_by');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
