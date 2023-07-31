<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasPermissions;
    use HasRoles;
    use Notifiable;
    use SoftDeletes;
    use HasFactory;

    public bool $preventAttrSet = false;

    protected string $guard_name = 'api';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'is_active', 'activation_token', 'username', 'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'activation_token', 'deleted_at',
    ];

    /**
     * The attributes that should be dates for arrays.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Tranform Created At in Human see
     *
     * @return string
     * @var date timestamp
     */
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }

    /**
     * Tranform Updated At in Human see
     *
     * @return string
     * @var date timestamp
     */
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }

    /**
     * Get the user that owns the post.
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Profile')->select(array('user_id', 'username', 'observations', 'birthday', 'hubspot_id'));
    }

}
