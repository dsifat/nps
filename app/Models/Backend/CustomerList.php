<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerList extends Model
{
    use HasFactory;

    public $table = 'customer_lists';

    public $fillable = [
        'name', 'email', 'phone_number', 'customer_group_id',
    ];

    public function customerGroup()
    {
        return $this->belongsTo(CustomerGroup::class, 'customer_group_id');
    }
}
