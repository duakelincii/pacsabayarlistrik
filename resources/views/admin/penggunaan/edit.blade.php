@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Formulir Penambahan Lab Baru</h6>
    </div>
    @foreach ($data as $pengguna )
    <div class="card-body">
        <form class="user" action="{{route('update.penggunaan')}}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-address-card"></i></div>
                    </div>
                    <input type="hidden" name="id" value="{{$pengguna->id}}">
                    <input type="hidden" name="id_user" value="{{$pengguna->id_user}}">
                <input type="text" class="form-control" placeholder="{{$pengguna->pelanggan->name}}" required readonly >
            </div>
        </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                    </div>
                <input type="text" class="form-control " name="penggunaan" value="{{$pengguna->penggunaan}}" required readonly>
            </div>
        </div>
        </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-arrow-up"></i></div>
                        </div>
                    <input type="text" class="form-control " name="meter_awal" value="{{$pengguna->meter_awal}}" required readonly>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-arrow-down"></i></div>
                        </div>
                    <input type="text" class="form-control " name="meter_akhir" value="{{$pengguna->meter_akhir}}" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-calendar-check"></i></div>
                        </div>
                    <input type="date" class="form-control " name="tgl_cek" value="{{$pengguna->tgl_cek}}" required>
                </div>
            </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <a href="{{route('penggunaan')}}" class="btn btn-danger btn-block btn">
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
    @endforeach
</div>
@endsection
