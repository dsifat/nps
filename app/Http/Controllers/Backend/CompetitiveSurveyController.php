<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

class CompetitiveSurveyController extends Controller
{
    public function index(){

        return view('backend.surveys.competitive.index');
    }
}
