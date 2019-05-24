<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclutador extends Model
{
    protected $table='Reclutador';
    protected $primaryKey ='ID_reclutador';
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
