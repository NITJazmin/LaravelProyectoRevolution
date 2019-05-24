<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='Empresa';
    protected $primaryKey ='ID_empresa';
    public $timestamps=false;

    protected $fillable=[
    	'Nombre',
    	'Giro',
    	'Direccion',
    	'Telefono',
    	'condicion'
    ];
}
