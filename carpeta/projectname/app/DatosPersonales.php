<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table='DatosPersonales';
    protected $primaryKey ='ID_datP';
    public $timestamps=false;

    protected $fillable=[
	  'nombre' => 'max:50',
	  'fechEval' => 'max:50',
	  'edad' => 'max:50',
	  'fechNac',
	  'lugarNac' => 'max:50',
	  'edoCivil' => 'max:50',
	  'gradoAcad' => 'max:50',
	  'telCasa' => 'max:50',
	  'tipoVivienda' => 'max:50',
	  'ID_estudio',
	  'condicion',
    ];
}
