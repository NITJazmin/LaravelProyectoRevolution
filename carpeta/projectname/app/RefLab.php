<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefLab extends Model
{
    protected $table='RefLab';
    protected $primaryKey ='ID_refLab';
    public $timestamps=false;

    protected $fillable=[
	  'nomEmpresa' => 'max:200',
	  'giro' => 'max:200',
	  'domicilio' => 'max:200',
	  'colonia' => 'max:200',
	  'delMun' => 'max:200',
	  'ultimoPuesto' => 'max:200',
	  'jefeInmediato' => 'max:200',
	  'fechIngreso' => 'max:200',
	  'fechSalida' => 'max:200',
	  'sueldoIni' => 'max:200',  
	  'sueldoFinal' => 'max:200',
	  'motSalida' => 'max:200',
	  'responsableRH' => 'max:200',
	  'comentarios'  => 'max:200',
	  'telefono' => 'max:200',
	  'puesto' => 'max:200',
	  'ID_estudio',
	  'condicion'
    ];
}
