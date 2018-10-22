<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinadorRev extends Model
{
    protected $table='CoordinadorRev';
    protected $primaryKey ='ID_coordinador';
    public $timestamps=false;

    protected $fillable=[
    	'Nombre',
    	'Papp',
    	'Sapp',
    	'condicion'
    ];

    
}
