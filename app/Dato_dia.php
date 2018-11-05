<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato_dia extends Model
{
    protected $fillable = ['cliente_id','fecha','peso','masa_muscular','grasa_corporal','grasa_viceral','todas_las_comidas','actividad_fisica','que_tipo','que_tiempo','suplemento'];


    public function clientes(){
    	
    	return $this->hasMany('App\Cliente', 'id');
    }
}
