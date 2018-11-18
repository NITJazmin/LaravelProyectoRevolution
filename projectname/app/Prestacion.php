<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
    protected $table='Prestacion';
    protected $primaryKey ='ID_prestacion';
    public $timestamps=false;

    protected $fillable=[
    	'sueldo',
    	'pago',
    	'prestaciones',
    	'Telefono',
    	'metricas',
    	'ID_datos',
    	'condicion'
    ];

}
