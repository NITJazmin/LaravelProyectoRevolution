<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinadorRev extends Model
{
    protected $table= 'CoordinadorRev';
    protected $primaryKey= 'ID_coordinador';

    public $timestamp= false;

    protected $fillable=[
    	'Nombre',
    	'P.app',
    	'S.app',
    	'e-mail',
    	'condicion'
    ];

    
}
