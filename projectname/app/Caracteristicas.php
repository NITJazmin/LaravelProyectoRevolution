<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
   protected $table='Caracteristicas';
    protected $primaryKey ='ID_caracteristicas';
    public $timestamps=false;

    protected $fillable=[
    	'puesto',
    	'cantidad',
    	'objetivo',
    	'actividades',
    	'reporte',
    	'diasLab',
    	'horario',
        'lugar',
        'rangoEdad',
        'sexo',
        'estadoCivil',
        'genteCargo',
        'actoresInternos',
        'actoresExternos',
        'ID_datos',
        'condicion'
    ];
}
