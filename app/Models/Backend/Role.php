<?php

namespace App\Models\Backend;

use Eloquent as Model;

/**
 * Class Role
 * @package App\Models\Backend
 * @version March 4, 2021, 7:17 am UTC
 *
 * @property string $role_name
 * @property string $description
 */
class Role extends Model
{
    public $table = 'roles';

    public $fillable = [
        'role_name',
        'description',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role_name' => 'string',
        'description' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role_name' => 'required|unique:roles,role_name',
    ];

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Backend\Permission')->withTimestamps();
    }

    public function allowTo($permissions)
    {
        $this->permissions()->sync($permissions);
    }
}
