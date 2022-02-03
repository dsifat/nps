<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

class AssignSurveyController extends Controller
{
    public function index()
    {
        return view('backend.surveys.assign.index');
    }
}
