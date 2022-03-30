<?php

namespace App\Models\Backend;

use Eloquent as Model;

/**
 * Class Subject
 * @package App\Models\Backend
 * @version March 30, 2022, 1:20 am +06
 *
 * @property string $name
 * @property string $logo
 */
class Subject extends Model
{
    public $table = 'subjects';
    



    public $fillable = [
        'name',
        'logo',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'logo' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
