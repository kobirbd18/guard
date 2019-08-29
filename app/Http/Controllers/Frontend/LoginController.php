<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function index(){
        return view('frontend.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        $errors = ['email' => trans('auth.failed')];
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors($errors);
    }
}
