<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Peticion;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PeticionFormRequest;
use Session;
use PDF;
use DB;

class PeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vista="peticion";
        $procedencia=Session::get('rol');
        $sesion=Session::get('ID_empleado');
        if ($request)
        {   
           $query=trim($request->get('searchText'));

           if($procedencia=='coordinador'){
               $solicitud=DB::table('Peticion as sol')
                   ->join('Empleado as empl','sol.ID_empleado','=','empl.ID_empleado')
                   ->join('CoordinadorRev as coor','sol.ID_coordinador','=','coor.ID_coordinador')
                   ->select('sol.*','empl.Nombre as empleado','empl.Papp','empl.Sapp','coor.Nombre as coordinador','coor.Papp as apellido')
                   ->where('sol.condicion','=','1')
                   ->where('sol.Nombre','LIKE','%'.$query.'%')          
                   ->orderBy('sol.FechaIni','asc')
                   -> paginate(15);
                 return view('revolution.peticion.index',["solicitud"=>$solicitud,"searchText"=>$query])->with('vista',$vista);
           }
            else{
                $solicitud=DB::table('Peticion as sol')
                   ->join('Empleado as empl','sol.ID_empleado','=','empl.ID_empleado')
                   ->select('sol.*','empl.Nombre as empleado')
                   ->where('empl.ID_empleado','=',$sesion)
                   ->where('sol.Nombre','LIKE','%'.$query.'%')   
                   -> paginate(15);
                return view('cliente.peticion.solicitud',["solicitud"=>$solicitud,"searchText"=>$query])->with('vista',$vista);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*El cliente es el único en crear una peticion nueva*/
    public function create()
    {
        $peticion=DB::table('Peticion')->where('condicion','=','1')->get();
        return view("cliente.peticion.create",["peticion"=>$peticion]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*El cliente es el único en crear una peticion nueva*/
    public function store(PeticionFormRequest $request)
    {
        $valor=Session::get('ID_empleado');
       
        $peticion=new Peticion;
        $peticion->Nombre=$request->get('Nombre');
        $peticion->FechaIni=$request->get('FechaI');
        $peticion->Status='proceso';
        $peticion->Descripcion=$request->get('Descripcion');
        $peticion->ID_empleado= $valor;
        $peticion->ID_coordinador='5';
        $peticion->ID_analista='sin asignar';
        $peticion->ID_reclutador='sin asignar';
        $peticion->condicion='1';
        $peticion->save();
        return Redirect::to('/cliente/peticion/solicitud'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //Sirve para Analista y reclutador para ver peticiones respectivamente
        $query=trim($request->get('searchText'));
        $usuario=Session::get('rol');
        $ID=Session::get('id');
        $solicitud=DB::table('Peticion as sol')
            ->join('Empleado as empl','sol.ID_empleado','=','empl.ID_empleado')
            ->select('sol.*','empl.Nombre as empleado','empl.Papp','empl.Sapp')
            ->where('sol.condicion','=','1')
            ->where('sol.ID_'.$usuario,'=',$ID)
            ->where('sol.Nombre','LIKE','%'.$query.'%')   
            -> paginate(15);
        if($usuario=='reclutador')
            return view('revolution.peticion.solicitud',["solicitud"=>$solicitud,"searchText"=>$query]);
        elseif ($usuario=='empleado') 
            return Redirect::to('cliente/peticion');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @pa@extends('layouts.admin')
@section('contenido')@extends('layouts.admin')
@section('contenido')@extends('layouts.admin')
@section('contenido')@extends('layouts.admin')
@section('contenido')@extends('layouts.admin')
@section('contenido')ram  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedencia=$_GET["procedencia"];

        $empleado=$_GET["empleado"];
        $Papp=$_GET["Papp"];
        $peticion=Peticion::findOrFail($id);

        $analista=DB::table('Analista')
        ->where('condicion','=','1')
        ->get();

        $reclutador=DB::table('Reclutador')
        ->where('condicion','=','1')
        ->get();


        if ($procedencia=='index') {
            //index proviene de revolution/peticion/solicitud
           return view("revolution.peticion.more",["peticion"=>$peticion,"analista"=>$analista,"reclutador"=>$reclutador,"empleado"=>$empleado,"Papp"=>$Papp]);
        }
        return var_dump($procedencia);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $solicitud=Peticion::findOrFail($id);

        $solicitud->FechaFin=$request->get('FechaFin');
        $solicitud->Status=$request->get('Status');
        $solicitud->Descripcion=$request->get('Descripcion');
        $solicitud->ID_analista=$request->get('ID_analista');
        $solicitud->ID_reclutador=$request->get('ID_reclutador');

        $solicitud->update();
        return Redirect::to('revolution/peticion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peticion=Peticion::findOrFail($id);
        $peticion->condicion='0';
        $peticion->save();
        return Redirect::to('revolution/peticion');
    }

    
    


}
