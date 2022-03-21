<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class SurveySummaryController extends Controller
{
    public function index()
    {
        return view('backend.surveys.summary.index');
    }
}
