<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentAssignmentsController extends Controller
{
    public function assigneeSurveyList()
    {
        return view('backend.surveys.telephonic.agents.assignments.index');
    }
}
