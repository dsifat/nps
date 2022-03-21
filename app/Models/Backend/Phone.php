<?php

namespace App\Models\Backend;

use Eloquent as Model;

/**
 * @SWG\Definition(
 *      definition="Phone",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="number",
 *          description="number",
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
class Phone extends Model
{
    public $table = 'phones';




    public $fillable = [
        'number',
        'phone_groups_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function phoneGroup()
    {
        return $this->belongsTo('App\Models\Backend\PhoneGroup', 'phone_groups_id');
    }
}
