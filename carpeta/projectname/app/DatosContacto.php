<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosContacto extends Model
{
    protected $table='DatosContacto';
    protected $primaryKey ='ID_datos';
    public $timestamps=false;

    protected $fillable=[
    	'razonSocial',
    	'nombre',
    	'giro',
    	'tamano',
    	'direccion',
    	'contacto',
    	'cargo',
        'telefono',
        'email',
        'ID_reclutador',
        'condicion'
    ];
}
