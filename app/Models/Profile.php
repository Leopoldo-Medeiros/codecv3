<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class Profile extends Model
{
    use HasRoles, HasPermissions, SoftDeletes;
    use HasFactory;

    protected string $guard_name = 'api';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'username', 'birthday', 'observations', 'hubspot_id', 'xero_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'deleted_at'
    ];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }

    /**
     * Tranform birthday At in Human see
     *
     * @return string
     * @var date timestamp
     */
    public function getBirthdayAttribute($date)
    {
        if (empty($date)) {
            return null;
        } else {
            $dateBirthdate = new Carbon($date);
            return $dateBirthdate->format('Y-m-d H:i:s');
        }

    }
}
