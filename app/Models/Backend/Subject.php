<?php

namespace App\Models\Backend;

use Eloquent as Model;



/**
 * Class Subject
 * @package App\Models\Backend
 * @version December 15, 2021, 12:17 am +06
 *
 * @property string $name
 */
class Subject extends Model
{


    public $table = 'subjects';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }


}
