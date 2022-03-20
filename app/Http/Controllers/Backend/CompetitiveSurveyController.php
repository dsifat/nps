<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Imports\CompetitiveSurveyImport;
use App\Imports\UsersImport;
use App\Jobs\SendAgentCreationEmailJob;
use App\Models\Backend\CompetitiveSurvey;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class CompetitiveSurveyController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
//            $users = User::whereHas(
//                'roles', function ($q) {
//                $q->where('role_name', 'Agent');
//            }
//            )->get();
//            dd('he');
            return datatables()->of(CompetitiveSurvey::all())
                ->addColumn('action', '')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.surveys.competitive.index');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $validator = \Validator::make($request->all(), [
            'survey_list' => 'required|max:5000|mimes:xls,xlsx',
        ]);

        if ($validator->fails()) {
//            dd($validator->errors());
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $file = $request->file('survey_list');
        $location = 'uploads';
        $filename = $file->getClientOriginalName();
        $file->move($location, $filename);
        $filepath = public_path($location . "/" . $filename);

        $items = \Excel::toArray(new CompetitiveSurveyImport(), $filepath);
        foreach ($items[0] as $item) {
            CompetitiveSurvey::create([
                'customer_msisdn' => $item['customer_msisdn'],
                'customer_email' => $item['customer_email'],
                'survey_topic' => $item['survey_topic'],
                'survey_name' => $item['survey_name'],
                'question' => $item['question'],
                'user_response' => $item['user_response'],
                'survey_date' => $this->transformDate($item['survey_date']),
                'nps_status' => $item['nps_status']
            ]);
        }
//dd('here');
        return response()->json(['success' => 'Data is successfully added']);
    }

    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
}
