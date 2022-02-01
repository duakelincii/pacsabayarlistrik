@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Formulir Penambahan Lab Baru</h6>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('simpan.tagihan')}}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="input-group mb-2">
                <select name="id_user" id="id_user" class="form-control">
                    <option value="">Pilih Pelanggan</option>
                    @foreach ($pelanggan as $user )
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div></div>
        </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <input type="text" class="form-control " name="tagihan_bulan"  placeholder="Tagihan Bulan" required>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <input type="text" class="form-control " name="jumlah_meter"  placeholder="Jumlah Meter Akhir" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                        <select name="tarif_kwh" id="tarif_kwh" class="form-control">
                                <option value="">Tarif Kwh</option>
                                @foreach ($tarif as $daya )
                                <option value="{{$daya->tarif_kwh}}">{{$daya->daya}} / Rp.{{$daya->tarif_kwh}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <select name="status" id="status" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="Belum Lunas">Belum Lunas</option>
                        <option value="Lunas">Lunas</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <a href="{{route('tagihan')}}" class="btn btn-danger btn-block btn">
                        <i class="fas fa-arrow-left fa-fw"></i> Kembali
                    </a>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block" name="simpan" value="simpan" >
                        <i class="fas fa-save fa-fw"></i> Simpan
                    </button>
                </div>
                </div>
        </form>
    </div>
</div>
@endsection
