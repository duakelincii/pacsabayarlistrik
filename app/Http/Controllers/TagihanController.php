<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Penggunaan;
use App\Tagihan;
use App\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagihan = Tagihan::all();
        return view('admin.tagihan.index',compact('tagihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarif = Tarif::get();
        $pelanggan = Pelanggan::get();
        return view('admin.tagihan.tambah',compact('pelanggan','tarif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = DB::table('tagihan')->insert([
            'id_user'           => $request->id_user,
            'tagihan_bulan'     => $request->tagihan_bulan,
            'jumlah_meter'      => $request->jumlah_meter,
            'tarif_kwh'         => $request->tarif_kwh,
            'jumlah_bayar'      => $request->jumlah_meter*$request->tarif_kwh,
            'status'            => $request->status,
        ]);
        $pesan = 'Tagihan pelanggan berhasil diinput';
        return redirect(route('tagihan'))->with('pesan',$pesan);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Tagihan::findOrFail($id);
        return view('admin.tagihan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $tagihan->delete();
        $error = 'data tagihan berhasil dihapus';
        return redirect(route('tagihan'))->with('error',$error);
    }
}
