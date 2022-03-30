<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="CustomerGroup",
 *      required={"name"},
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
class CustomerGroup extends Model
{
    use HasFactory;

    public $table = 'customer_groups';

    public $fillable = [
        'name',
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:customer_groups,name,',
        'customer_list' => 'required|max:5000|mimes:csv,xlx,xls,xlsx',
    ];

    public static $messages = [
        'name.required' => 'Customer Group Name is required',
        'customer_list.required' => 'Uploading File is required',
    ];

    public function customerLists()
    {
        return $this->hasMany(CustomerList::class);
    }
}
