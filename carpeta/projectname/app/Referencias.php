<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencias extends Model
{
    protected $table='Referencias';
    protected $primaryKey ='ID_referencias';
    public $timestamps=false;

    protected $fillable=[
    	  'ID_referencias' ,
		  'nombrePers' ,
		  'telefonoPers' ,
		  'parentesco' ,
		  'tmpConocer' ,
		  'opinion' ,
		  'recomienda' ,
		  'observacion' ,
		  'tipoRef' ,
		  'ID_estudio',
		  'condicion',
    ];
}
