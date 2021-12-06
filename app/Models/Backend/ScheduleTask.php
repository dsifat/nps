<?php

namespace App\Models\Backend;

use Carbon\Carbon;
use Eloquent as Model;

/**
 * Class ScheduleTask
 * @package App\Models\Backend
 * @version April 27, 2021, 4:53 am UTC
 *
 * @property string $description
 * @property string $command
 * @property string $parameters
 * @property string $expression
 * @property bool $is_active
 * @property bool $dont_overlap
 * @property string $notification_email_address
 * @property int $notification_type
 * @property int $log_clean_up_frequency
 * @property int $log_clean_up_type
 */
class ScheduleTask extends Model
{
    public $table = 'schedule_tasks';

    public $fillable = [
        'description',
        'command',
        'parameters',
        'expression',
        'is_active',
        'dont_overlap',
        'notification_email_address',
        'notification_type',
        'log_clean_up_frequency',
        'log_clean_up_type',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'command' => 'string',
        'parameters' => 'string',
        'expression' => 'string',
        'is_active' => 'boolean',
        'dont_overlap' => 'boolean',
        'notification_email_address' => 'string',
        'notification_type' => 'integer',
        'log_clean_up_frequency' => 'integer',
        'log_clean_up_type' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required',
        'command' => 'required',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function compileParameters($console = false)
    {
        if ($this->parameters) {
            $regex = '/(?=\S)[^\'"\s]*(?:\'[^\']*\'[^\'"\s]*|"[^"]*"[^\'"\s]*)*/';
            preg_match_all($regex, $this->parameters, $matches, PREG_SET_ORDER, 0);

            $parameters = [];
            $argument_index = 0;
            foreach ($matches as $single_param) {
                $param = explode('=', $single_param[0]);

                if (count($param) > 1) {
                    $trimmed_param = trim(trim($param[1], '"'), "'");
                    if ($console) {
                        starts_with($param[0], '--') ? $parameters[$param[0]] = $trimmed_param : $parameters[$argument_index++] = $trimmed_param;
                    } else {
                        $parameters[$param[0]] = $trimmed_param;
                    }
                } else {
                    starts_with($param[0], '--') && ! $console ? $parameters[$param[0]] = true : $parameters[$argument_index++] = $param[0];
                }
            }

            return $parameters;
        }

        return [];
    }

    public function logPath()
    {
        return 'logs' . DIRECTORY_SEPARATOR . 'schedule-' . sha1($this->expression . $this->command);
        // return 'logs' . DIRECTORY_SEPARATOR . 'schedule-' . $this->id;
    }

    /**
     * Get all of the logs for the ScheduleTask
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logs()
    {
        return $this->hasMany(ScheduleTaskLog::class)->orderBy('id', 'desc');
    }

    public function logCleanup()
    {
        if ($this->log_clean_up_frequency > 0) {
            if ($this->auto_cleanup_type == 0) {
                $oldest_id = $this->logs()
                    ->limit($this->log_clean_up_frequency)
                    ->get()
                    ->min('id');
                $this->logs()
                    ->where('id', '<', $oldest_id)
                    ->delete();
            } else {
                $this->logs()
                    ->where('created_at', '<', Carbon::now()->subDays($this->log_clean_up_frequency - 1))
                    ->delete();
            }
        }
    }
}
