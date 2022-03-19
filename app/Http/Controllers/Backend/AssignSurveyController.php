<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AssignSurveyController extends Controller
{
    public function index()
    {
        return view('backend.surveys.assign.index');
    }

    public function AllAssignedSurveys()
    {
//        dd('here');
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => 'content-left-sidebar',
            'bodyClass' => 'todo-application',
            'layoutWidth' => 'boxed',
        ];

        return view('backend.surveys.assign.all_assigned');
    }
}
