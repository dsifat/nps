<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\MatchOldPassword;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePassController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function store(Request $request)
    {
//        dd("asdasd");
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        dd('Password change successfully.');

    }
}
