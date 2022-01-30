@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Formulir Penambahan Lab Baru</h6>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('simpan.tarif')}}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-address-card"></i></div>
                    </div>
                <select name="id_user" id="id_user" class="form-control">
                    <option value="">Pilih Pelanggan</option>
                    @foreach ( $pelanggan as $user )
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                    </div>
                <input type="number" class="form-control " name="bulan"  placeholder="Bulan Penggunaan" required readonly>
            </div>
        </div>
        </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-arrow-up"></i></div>
                        </div>
                    <input type="text" class="form-control " name="meter_awal"  placeholder="Meter Awal" required readonly>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-arrow-down"></i></div>
                        </div>
                    <input type="text" class="form-control " name="mete_akhir"  placeholder="Meter Akhir" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-calendar-check"></i></div>
                        </div>
                    <input type="date" class="form-control " name="tgl_cek"  placeholder="Tanggal Pengecheckan" required>
                </div>
            </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <a href="{{route('tarif')}}" class="btn btn-danger btn-block btn">
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
