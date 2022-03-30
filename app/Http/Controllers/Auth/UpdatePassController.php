<?php

namespace App\Http\Controllers\Auth;

use Flash;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Backend\MatchOldPassword;

class UpdatePassController extends Controller
{
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
        return view('auth.passwords.change');
    }

    public function store(Request $request)
    {
        //        dd("asdasd");
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'new_password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                // 'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        $user = $request->user();

        $user->password_resetted = 1;

        $user->save();

        Flash::success('Password changed successfully');

        return redirect(route('change-password'));
    }
}
