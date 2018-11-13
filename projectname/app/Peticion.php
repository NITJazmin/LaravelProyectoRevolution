<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    protected $table='Peticion';
    protected $primaryKey ='ID_peticion';
    public $timestamps=false;

    protected $fillable=[
    	'Nombre',
    	'FechaIni',
    	'FechaFin',
    	'Status',
    	'Descripcion',
    	'ID_Empleado',
    	'ID_coordinador',
        'ID_analista',
        'ID_reclutador',
        'condicion'
    ];
}
