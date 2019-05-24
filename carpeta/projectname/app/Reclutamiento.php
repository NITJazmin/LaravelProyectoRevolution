<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclutamiento extends Model
{
    protected $table='Reclutamiento';
    protected $primaryKey ='ID_reclutado';
    public $timestamps=false;

    protected $fillable=[
    	'entrevistas',
    	'entrevistador',
    	'sustituto',
    	'psicometrico',
    	'condicion',
    	'ese',
    	'particularidad',
    	'fecMax',
    	'rechazo',
    	'comentarios',
    	'ID_datos',
    	'condicion'
    ];

}
