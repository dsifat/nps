<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('backend.dashboard.index', ['pageConfigs' => $pageConfigs]);
    }
}
