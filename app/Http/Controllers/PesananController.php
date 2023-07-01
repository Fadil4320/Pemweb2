<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function pesanan()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' =>$pesanan->getAllData()]);
    }

    public function create()
    {
        $produk = Produk::all();
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create', compact('pesanan','produk'));
    }

    public function store(Request $request)
    {
        $pesanan = new Pesanan();
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $pesanan = DB::table('pesanan') ->where('id', $id) ->get();
        $produk = DB::table('produk') ->get();
        return view('admin.pesanan.edit', compact('pesanan','produk'));
    }

    public function update(Request $request, string $id)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    public function destroy(string $id)
    {
        DB::table('pesanan')->where('id',$id)->delete();
        return redirect('admin/pesanan');
    }
}