<?php

namespace App\Models\Backend;

use Eloquent as Model;



/**
 * @SWG\Definition(
 *      definition="Topic",
 *      required={"name"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="parent_id",
 *          description="parent_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
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
class Topic extends Model
{
    public $table = 'topics';

    public $fillable = [
        'name',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'name' => 'string'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ];

    public function topic()
    {
        return $this->belongsTo(\App\Models\Backend\Topic::class, 'parent_id','id');
    }

//    public function getTopicAttribute(){
//        $this->pare
//    }

}
