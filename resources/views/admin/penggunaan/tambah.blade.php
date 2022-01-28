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
                <input type="number" class="form-control " name="tarif_kwh"  placeholder="Harga Kwh" required>
            </div></div>
        </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-vote-yea"></i></div>
                        </div>
                    <input type="text" class="form-control " name="golongan"  placeholder="Golongan" required>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-bolt"></i></div>
                        </div>
                    <input type="text" class="form-control " name="daya"  placeholder="Daya" required>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                        </div>
                    <input type="number" class="form-control " name="tarif_kwh"  placeholder="Harga Kwh" required>
                </div></div>
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
