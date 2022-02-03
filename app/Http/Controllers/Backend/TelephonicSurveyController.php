<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

class TelephonicSurveyController extends Controller
{
    public function index()
    {
        return view('backend.surveys.telephonic.index');
    }
}