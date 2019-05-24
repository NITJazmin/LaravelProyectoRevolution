<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosSocioE extends Model
{
    protected $table='DatosSocioE';
    protected $primaryKey ='ID_estudio';
    public $timestamps=false;

    protected $fillable=[
      'nombrePostulado' ,
	  'puestoSol' ,
	  'fechSol' ,  
	  'fechEntr' ,
	  'atencion' ,
	  'region' ,
	  'telefonica' ,  
	  'familiar' ,
	  'laboral' ,  
	  'psicosocial' ,
	  'factorRiesgo' ,
	  'deshonestidad' ,
	  'obsHonestidad' ,
	  'adicciones' ,  
	  'Obsadic' ,
	  'perversion' ,  
	  'Obsperv' ,
	  'inestabilidadEmo' ,
	  'ObsEmo' ,  
	  'resultado' ,
	  'resRefLab' ,
	  'mapa' ,  
	  'ID_peticion',
	  'condicion'
    ];
}
