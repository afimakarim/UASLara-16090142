<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tim extends Model
{
    use SoftDeletes;
    protected $table='tim';
    protected $fillable = ['namaTim','asal'];
}

