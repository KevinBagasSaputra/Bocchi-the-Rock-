<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class RegisterController extends Controller
{
    public function register(){
        return view('Auth/register');
    }

    public function action_register(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Session::flash('message', 'Register Berhasil!');


        return redirect('register');
    }
}
