@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Formulir Penambahan Lab Baru</h6>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('simpan.pelanggan')}}" method="post">
        @csrf
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <input type="text" class="form-control " name="name"  placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <input type="date" class="form-control " name="tgl_lahir" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <input type="text" class="form-control " name="phone"  placeholder="No Handphone" required>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <select name="id_tarif" id="id_tarif" class="form-control">
                        @foreach ($datas as $tarif )
                        <option value="">Pilih Daya</option>
                        <option value="{{$tarif->id}}">{{$tarif->no_tarif}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <input type="text" class="form-control " name="username"  placeholder="Username" >
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                    <input type="password" class="form-control " name="password"  placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <a href="{{route('pelanggan')}}" class="btn btn-danger btn-block btn">
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
