<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{

    public function categoria() {
        return $this->belongsTo(categoria::class);
    }

    public function cliente() {
        return $this->belongsTo(cliente::class);
    }
    protected $fillable = [
     'nombre','raza','peso','categoria_id','cliente_id'
     
    ];
}
