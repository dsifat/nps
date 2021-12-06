<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScheduleTaskLog extends Model
{
    use HasFactory;

    public $table = 'schedule_task_logs';

    public $fillable = [
        'executed_by',
        'is_successfull',
        'log',
        'time_taken',
        'schedule_task_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'executed_by' => 'string',
        'is_successfull' => 'boolean',
        'log' => 'string',
        'time_taken' => 'string',
        'schedule_task_id' => 'integer',
    ];
}
