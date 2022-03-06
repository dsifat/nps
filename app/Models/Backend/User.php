<?php

namespace App\Models\Backend;

use DateTimeInterface;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @SWG\Definition(
 *      definition="User",
 *      required={"name", "email", "created_at", "updated_at"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use Notifiable;
    use HasFactory;

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param \DateTimeInterface $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'isp_id', 'phone_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'meta_data' => 'array'
    ];

    public function isSuperAdmin()
    {
        return $this->permissions()->contains('SUPER-ADMIN');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Backend\Role')->withTimestamps();
    }

    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('role_name', $role)->firstOrFail();
        }

        if (!$role) {
            $this->roles()->delete();
        } else {
            $this->roles()->sync($role);
        }
    }

    public function permissions()
    {
        return $this->roles->map->permissions->flatten()->pluck('permission')->unique();
    }

    public function getSuperAdminAttribute()
    {
        return $this->isSuperAdmin();
    }
}
