<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class pertandingan extends Model
{
    protected $table='timPertandingan';
    protected $fillable = ['namaTim','asal'];
}

