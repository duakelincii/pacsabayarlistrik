<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    protected $fillable = [
        'tagihan_bulan' , 'id_user' ,'jumlah_meter','tarif_kwh','total_bayar','status','bukti'
    ];

    public function penggunaan()
    {
        return $this->belongsTo(Penggunaan::class,'id_penggunaan','id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'id_user','id');
    }

    public function tarif()
    {
        return $this->belongsTo(Tarif::class,'tarif_kwh','id');
    }
}
