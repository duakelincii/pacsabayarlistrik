<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'username','tgl_lahir' ,'password','name','alamat','phone','id_tarif','is_admin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tarif()
    {
        return $this->belongsTo(Tarif::class,'id_tarif','id');
    }
}
