<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{

    public function mascota() {
        return $this->belongsTo(mascota::class);
    }

    public function medicina() {
        return $this->belongsTo(medicina::class);
    }
    protected $fillable = [
     'fecha','numero','descripcion','mascota_id','medicina_id'
     
    ];
}
