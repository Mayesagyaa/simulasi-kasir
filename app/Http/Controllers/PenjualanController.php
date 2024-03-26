<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::get();
        return view('admin.penjualan', ['penjualan' => $penjualan]);
    }

    public function tambah()
    {
        return view('admin.penjualan.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'pelanggan_id' => $request->pelanggan_id,
            'tgl_penjualan'=> $request->tgl_penjualan,
            'total_harga'=>$request->total_harga
        ];

        Penjualan::create($data);
        return redirect()->route('penjualan');
    }

    public function edit($id)
    {
        $penjualan = Penjualan::find($id)->first();
        return view('admin.penjualan.form', ['penjualan' => $penjualan]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'pelanggan_id' => $request->pelanggan_id,
            'tgl_penjualan'=> $request->tgl_penjualan,
            'total_harga'=>$request->total_harga
        ];

        Penjualan::find($id)->update($data);
        return redirect()->route('penjualan');
    }

    public function hapus($id)
    {
        Penjualan::find($id)->delete();
        return redirect()->route('penjualan');
    }
}
