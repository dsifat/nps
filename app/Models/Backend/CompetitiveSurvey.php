<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitiveSurvey extends Model
{
    use HasFactory;

    public $fillable = [
        'customer_msisdn','customer_email','survey_topic','survey_name','question','user_response','survey_date','nps_status'
    ];
}
