<?php

namespace App\Models\Backend;

use Eloquent as Model;

/**
 * Class Question
 * @package App\Models\Backend
 * @version December 15, 2021, 1:20 pm +06
 *
 * @property \App\Models\Backend\Subject $subject
 * @property string $title
 * @property string $answer
 */
class Question extends Model
{
    public $table = 'questions';
    



    public $fillable = [
        'title',
        'answer',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'answer' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function subject()
    {
        return $this->belongsTo(\App\Models\Backend\Subject::class, 'subject');
    }
}
