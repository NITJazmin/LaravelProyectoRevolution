<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='Empleado';
    protected $primaryKey ='ID_empleado';
    public $timestamps=false;

    protected $fillable=[
    	'Nombre',
    	'Paap',
    	'Sapp',
    	'Telefono',
    	'email',
    	'ID_empresa',
    	'condicion'
    ];
}
