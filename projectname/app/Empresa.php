<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='Empresa';
    protected $primaryKey ='ID_empresa';
    public $timestamps=false;

    protected $fillable=[
    	'Nombre',
    	'Telefono',
    ];
}
