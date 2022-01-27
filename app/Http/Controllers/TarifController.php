<?php

namespace App\Http\Controllers;

use App\Tarif;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarifController extends Controller
{
    public function index()
    {
        $tarif = Tarif::all();
        return view('admin.tarif.index',compact('tarif'));
    }

    public function create()
    {
        return view('admin.tarif.tambah');
    }

    public function store(Request $request)
    {
        $create = $request->validate([
            'golongan'  => 'required',
            'daya'      => 'required',
            'tarif_kwh' => 'required|numeric',
        ]);

        DB::table('tarif')->insert(
            [
                'no_tarif'      => $request->golongan."/".$request->daya,
                'golongan'      => $request->golongan,
                'daya'          => $request->daya,
                'tarif_kwh'     => $request->tarif_kwh,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        return redirect(route('tarif'))->with('pesan','Berhasil Menambahkan Tarif');
    }

    public function edit($id)
    {
        $data = Tarif::where('id',$id)->get();
        return view('admin.tarif.edit',compact('data'));
    }

    public function update(Request $request)
    {
        $create = $request->validate([
            'golongan'  => 'required',
            'daya'      => 'required',
            'tarif_kwh' => 'required|numeric',
        ]);

        DB::table('tarif')->where('id',$request->id)->update(
            [
                'no_tarif' => $request->no_tarif,
                'golongan' => $request->golongan,
                'daya'      => $request->daya,
                'tarif_kwh' => $request->tarif_kwh,
                'updated_at'    => Carbon::now()
            ]);
        return redirect(route('tarif'))->with('pesan','Berhasil Menambahkan Tarif');
    }

    public function delete($id)
    {
        DB::table('tarif')->where('id',$id)->delete();
        $pesan = 'Tarif Berhasil Dihapus';
        return redirect(route('tarif'))->with('error',$pesan);
    }
}
