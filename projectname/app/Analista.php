<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analista extends Model
{
    protected $table='Analista';
    protected $primaryKey ='ID_analista';
    public $timestamps=false;

    protected $fillable=[
    	'Nombre',
    	'Papp',
    	'Sapp',
    	'Telefono',
    	'ID_coordinador'
    ];
}
