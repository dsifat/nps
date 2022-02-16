<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

class TelephonicSurveyController extends Controller
{
    public function index()
    {
        return view('backend.surveys.telephonic.index');
    }

    public function allTelephonicSurvey()
    {
        return view('backend.surveys.telephonic.all_telephonic_survey');
    }

    public function assignSurvey()
    {
        return view('backend.surveys.telephonic.assign_survey');
    }

    public function summary()
    {
        return view('backend.surveys.telephonic.summary');
    }

    public function assigneeSurveyList()
    {
        return view('backend.surveys.telephonic.assignee_survey_list');
    }

    public function surveyDetails()
    {
        return view('backend.surveys.telephonic.survey_detail');
    }
}
