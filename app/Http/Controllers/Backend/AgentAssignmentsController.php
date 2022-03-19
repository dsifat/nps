<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AgentAssignmentsController extends Controller
{
    public function assigneeSurveyList()
    {
        return view('backend.surveys.telephonic.agents.assignments.index');
    }
}
