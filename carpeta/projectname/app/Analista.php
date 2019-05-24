<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analista extends Model
{
    protected $table='Analista';
    protected $primaryKey ='ID_analista';
    public $timestamps=false;

    protected $fillable=[
    	'Nombre',
    	'Papp',
    	'Sapp',
    	'Telefono',
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
