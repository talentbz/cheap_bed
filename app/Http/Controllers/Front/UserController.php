<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB, Validator, Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    public function signup(Request $request)
    {
        return view('front.pages.user.signup');
    }

    public function signup_submit(Request $request)
    {
        $rules = array('email' => 'unique:users,email');
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = new User();
        $user->name = $request->first_name.' '.$request->first_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }

    public function login(Request $request)
    {
        return view('front.pages.help.index');
    }

    public function login_submit(Request $request)
    {
        // at first, get the url from session which will be redirect after login
        if ($request->session()->has('redirectTo')) {
            $redirectURL = $request->session()->get('redirectTo');
        } else {
            $redirectURL = null;
        }
        $credentials = $request->only('email', 'password');
        // login attempt
        if (Auth::guard('web')->attempt($credentials) == 'true') {
            // otherwise, redirect auth user to next url
            if ($redirectURL == null) {
                return 'success';
                // return redirect()->route('front.user.dashboard');
            } else {
                // before, redirect to next url forget the session value
                $request->session()->forget('redirectTo');
                return redirect($redirectURL);
            }
        } else {
            $request->session()->flash('error', 'The provided credentials do not match our records!');
            return redirect()->back();
        }
    }

    public function dashboard(Request $request){
        return view('front.pages.user.dashboard');
    }
}
