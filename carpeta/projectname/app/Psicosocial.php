<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicosocial extends Model
{
    protected $table='Psicosocial';
    protected $primaryKey ='ID_psicosocial';
    public $timestamps=false;

    protected $fillable=[
      'ID_psicosocial' ,
	  'FacebookObs' ,
	  'LinkedObs' ,
	  'TwitterObs' ,
	  'Resultado' ,
	  'ID_estudio' ,
	  'condicion' ,
    ];
}
