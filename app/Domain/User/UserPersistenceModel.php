<?php

namespace App\Domain\User;

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
        'role_id',
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
}
