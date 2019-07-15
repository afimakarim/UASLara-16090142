<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemain extends Model
{
    // use SoftDeletes;
    protected $table='pemain';
    protected $fillable = ['nama_tim','nama_pemain','no_punggung'];
}