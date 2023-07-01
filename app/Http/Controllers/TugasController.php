<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index(){
        return view('tugasform');
    }

    // buat function yang di dalam nya mengambil inputan form
    // dengan menggunakan parameter $request
    // dan lakukan pengecekan apakah nama dll sudah di isi atau belum (required)

    public function hasil(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "email" => 'required',
            "lokasi" => 'required',
            "jenis_kelamin" => 'required',
            "skill" => 'required',
        ]);
        return view('tugashasil', ['data' => $request]);
    }
    // public function hasil(Request $request){
    //         $nama = $request->input('nama');
    //         $email = $request->input('email');
    //         $lokasi = $request->input('lokasi');
    //         $kelamin = $request->input('jenis_kelamin');
    //         $skill = $request->input('skill');

    //     return view('tugasform', ["nama" => $nama, "email" => $email, "lokasi" => $lokasi,
    //     "jenis_kelamin" => $kelamin, "skill" => $skill]);
    // }
}
