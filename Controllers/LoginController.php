<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } 
        else {
            return view('/Auth/login');
        }
        
    }

    public function action_login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::Attempt($data)) {
            Session::flash('message', 'Welcome !!!');
            return redirect('dashboard');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }


    public function action_logout()
    {
        Auth::logout();
        return redirect('/');
    }



    // 
}



