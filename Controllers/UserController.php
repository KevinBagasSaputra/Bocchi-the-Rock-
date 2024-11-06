<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    // User Update START
        public function user_update(Request $request){
            $file = $request->file('profile');
            $namafile = $request->id . "." . $file->getClientOriginalExtension();
            $file->move(public_path('Assets/assets_save/img/user/profile'), $namafile);
    
            DB::table('users')->where('id', $request->id)->update([
                'name' => $request->name,
                'profile' => $namafile
            ]);
            // alihkan halaman ke route produk
            return redirect('/dashboard');    
        }
    // User Update END
}
