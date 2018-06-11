<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function do_login(Request $request){

        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // 認證通過...
            return redirect()->intended('dashboard');
        }

        return \Redirect::back()->withErrors('帳號密碼錯誤!');
    }

    public function logout(){
        Auth::logout();
        return \Redirect::route('login');
    }
}
