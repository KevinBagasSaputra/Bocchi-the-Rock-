<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function kirim_data(Request $request){
        DB::table('komentar')->insert([
            'id' => $request->id,
            'komentar' => $request->komentar,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        // alihkan halaman ke route produk
        Session::flash('message', 'Data berhasil dikirim!.');
        return redirect('/#komentar');

    }
}
