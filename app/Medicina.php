<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicina extends Model
{
    protected $fillable = [
     'nombre','precio','dosis'
    ];
}
