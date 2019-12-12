<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    protected $fillable = [
     'servicio_id','producto_id','tratamiento_id','medicina_id','vacuna_id','total'
    ];
}
