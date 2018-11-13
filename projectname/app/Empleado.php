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
        'puesto',
    	'ID_empresa',
        'foto',
    	'condicion'
    ];

    /**
     * Get the User record associated with the coordinador.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
