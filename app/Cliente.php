<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre','apellido','celular','fecha_nacimiento','fecha_llegada','peso_llegada','altura'];

    public function datos_dias(){
        
        return $this->belongsTo('App\Dato_dia', 'id');
    }
}
