<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(){
        $user = DB::table('users')->get();
        return view('middleware/dashboard', ['user' => $user]);
    }


}
