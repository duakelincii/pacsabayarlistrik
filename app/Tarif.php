<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarif';
    protected $fillable =
    [
        'no_tarif','golongan','daya','tarif_kwh'
    ];
}
