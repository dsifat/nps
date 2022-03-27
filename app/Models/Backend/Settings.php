<?php

namespace App\Models\Backend;

use Eloquent as Model;



/**
 * Class Settings
 * @package App\Models\Backend
 * @version March 24, 2022, 2:21 am +06
 *
 * @property string $data
 */
class Settings extends Model
{


    public $table = 'settings';
    



    public $fillable = [
        'data'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
