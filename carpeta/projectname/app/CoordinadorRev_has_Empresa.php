<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinadorRev_has_Empresa extends Model
{
    protected $table='CoordinadorRev_has_Empresa';
    protected $primaryKey ='ID_coor_empr';
    public $timestamps=false;

    protected $fillable=[
    	'ID_coordinador',
    	'ID_empresa'
    ];

}
