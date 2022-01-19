<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class UpdatePassController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true,
        ];

        return view('/auth/passwords/change', [
            'pageConfigs' => $pageConfigs,
        ]);
    }
}
