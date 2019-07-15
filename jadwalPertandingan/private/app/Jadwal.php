<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use SoftDeletes;
    protected $table='jadwal';
    protected $fillable = ['tim_1','tim_2','score','tanggal','jam_tanding','tempat','status'];
}

