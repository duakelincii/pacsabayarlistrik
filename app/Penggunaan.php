<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{
    protected $table = 'penggunaan';
    protected $fillable =
    [
        'id_user','penggunaan','meter_awal','meter_akhir','tgl_cek'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'id_user','id');
    }
}
