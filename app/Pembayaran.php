<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = ['id_user','tgl_bayar','tagihan_bulan','jumlah_bayar','biaya_admin','total','bayar','kembali','bukti_bayar' ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class , 'id_user','id');
    }
}
