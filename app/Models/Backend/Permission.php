<?php

namespace App\Models\Backend;

use Eloquent as Model;

/**
 * Class Permission
 * @package App\Models\Backend
 * @version March 4, 2021, 12:42 pm UTC
 *
 * @property string $label
 * @property string $permission
 * @property string $group
 */
class Permission extends Model
{
    public $table = 'permissions';

    public $fillable = [
        'label',
        'permission',
        'group',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'label' => 'string',
        'permission' => 'string',
        'group' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'label' => 'required|unique:permissions',
        'permission' => 'required|unique:permissions',
        'group' => 'required',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Backend\Role')->withTimestamps();
    }
}
