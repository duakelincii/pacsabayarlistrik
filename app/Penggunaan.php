<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{
    protected $table = 'penggunaan';
    protected $fillable =
    [
        'id_user','bulan','tahun','meter_awal','meter_akhir',
    ];

    public function user()
    {
        return $this->belongsTo(Penggunaan::class,'id_user','id');
    }
}
