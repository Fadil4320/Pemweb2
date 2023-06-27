<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    // buat function yang di dalam nya mengambil inputan form
    // dengan menggunakan parameter $request
    // dan lakukan pengecekan apakah nama dll sudah di isi atau belum (required)

    public function hasil(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "ttl" => 'required',
            "jenis_kelamin" => 'required',
            "hobi" => 'required',
        ]);
        return view('hasil', ['data' => $request]);
    }
}
