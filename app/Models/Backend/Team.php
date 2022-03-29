<?php

namespace App\Models\Backend;

use Eloquent as Model;


/**
 * Class Team
 * @package App\Models\Backend
 * @version March 20, 2022, 5:17 pm +06
 *
 * @property string $name
 */
class Team extends Model
{
    public $table = 'teams';

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
        'name' => 'required',
        'team_members_list' => 'max:5000|mimes:csv,xlx,xls,xlsx',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function addMembers($user)
    {
        if (is_string($user)) {
            $user = User::where('name', $user)->firstOrFail();
        }

        if (!$user) {
            $this->users()->delete();
        } else {
            $this->users()->sync($user);
        }
    }
}
