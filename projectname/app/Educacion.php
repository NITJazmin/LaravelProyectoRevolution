<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    protected $table='Educacion';
    protected $primaryKey ='ID_educacion';
    public $timestamps=false;

    protected $fillable=[
    	'escolaridad',
    	'conocimientos',
    	'experiencia',
    	'competencias',
        'habilidades',
    	'office',
        'funcionesOffice',
    	'herramientas',
    	'adicional',
    	'funcionesAdicional',
        'idiomas',
        'ID_datos',
    	'condicion'
    ];

}
