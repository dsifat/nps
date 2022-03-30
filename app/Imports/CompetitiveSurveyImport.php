<?php

namespace App\Imports;

use App\Models\Backend\CompetitiveSurvey;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CompetitiveSurveyImport implements WithHeadingRow, WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
//    public function model(array $row)
//    {
//        return new CompetitiveSurvey([
//            'customer_msisdn' => $row['customer_msisdn'],
//            'customer_email' => $row['customer_email'],
//            'survey_topic' => $row['survey_topic'],
//            'survey_name' => $row['survey_name'],
//            'question' => $row['question'],
//            'user_response' => $row['user_response'],
//            'survey_date' => $row['survey_date'],
//            'nps_status' => $row['nps_status'],
//        ]);
//    }
}
