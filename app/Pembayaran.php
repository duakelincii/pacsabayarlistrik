<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = [ 'id_user','tgl_bayar','bulan_bayar','tahun_bayar','jumlah_bayar','biaya_admin','total','bayar','kembali','bukti_bayar' ];

    public function user()
    {
        return $this->belongsTo(User::class , 'id_user','id');
    }
}
