<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Penggunaan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakai = Penggunaan::all();
        return view('admin.penggunaan.index',compact('pakai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pelanggan = Pelanggan::get();
        return view('admin.penggunaan.tambah',compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('penggunaan')->insert([
            'id_user'       => $request->id_user,
            'penggunaan'    => $request->penggunaan,
            'meter_awal'    => $request->meter_awal,
            'meter_akhir'   => $request->meter_akhir,
            'tgl_cek'       => $request->tgl_cek,
        ]);

        $pesan = 'data penggunaan berhasil disimpan';
        return redirect(route('penggunaan'))->with('pesan',$pesan);
    }

    public function edit($id)
    {
        $data = Penggunaan::where('id',$id)->get();
        return view('admin.penggunaan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('penggunaan')->where('id',$request->id)->update(
        [
            'id_user'       => $request->id_user,
            'penggunaan'    => $request->penggunaan,
            'meter_awal'    => $request->meter_awal,
            'meter_akhir'   => $request->meter_akhir,
            'tgl_cek'       => $request->tgl_cek,
        ]);

        $pesan = 'data penggunaan berhasil diupdate';
        return redirect(route('penggunaan'))->with('pesan',$pesan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = Penggunaan::findOrFail($id);
        $pengguna->delete();
        $error = 'data penggunaan berhasil dihapus';
        return redirect(route('penggunaan'))->with('error',$error);
    }
}
