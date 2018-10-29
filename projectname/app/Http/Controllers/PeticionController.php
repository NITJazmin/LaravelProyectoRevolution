<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Peticion;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PeticionFormRequest;
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
        if ($request)
        {    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
           $query=trim($request->get('searchText'));
           $solicitud=DB::table('Peticion as sol')
           ->join('Empleado as empl','sol.ID_empleado','=','empl.ID_empleado')
           ->join('CoordinadorRev as coor','sol.ID_coordinador','=','coor.ID_coordinador')
          
           ->select('sol.*','empl.Nombre as empleado','empl.Papp','empl.Sapp','coor.Nombre as coordinador','coor.Papp as apellido')
           ->where('sol.condicion','=','1')
           ->where('sol.Nombre','LIKE','%'.$query.'%')          
           ->orderBy('sol.ID_peticion','asc')
           -> paginate(15);
           return view('revolution.peticion.index',["solicitud"=>$solicitud,"searchText"=>$query])->with('vista',$vista);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peticion=DB::table('Peticion')->where('condicion','=','1')->get();
        return view("cliente.create",["peticion"=>$peticion]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeticionFormRequest $request)
    {
        $peticion=new Peticion;
        //'nombre' es obj creado del request
        $peticion->Nombre=$request->get('Nombre');
        $peticion->FechaIni=$request->get('FechaI');
        $peticion->Status='proceso';
        $peticion->Descripcion=$request->get('Descripcion');
        $peticion->ID_Empleado='2';
        $peticion->ID_coordinador='5';
        $peticion->condicion='1';
        $peticion->save();
        //Después de guardar nos redireccionamos a la carpeta 
        return Redirect::to('/cliente/show'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $vista="peticion";
        if ($request)
        {
           $query=trim($request->get('searchText'));
           $solicitud=DB::table('Peticion as sol')
           ->join('CoordinadorRev as coor','sol.ID_coordinador','=','coor.ID_coordinador')
           ->select('sol.*','coor.Nombre as coordinador','coor.Papp')
           ->where('sol.condicion','=','1')
           ->where('sol.ID_Empleado','=','2')//hay que haerlo automaticamente
           ->orderBy('sol.Nombre','asc')
           -> paginate(15);
           return view('cliente.solicitud',["solicitud"=>$solicitud,"searchText"=>$query])->with('vista',$vista);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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

        $solicitud->Nombre=$request->get('Nombre');
        $solicitud->FechIni=$request->get('FechIni');
        $solicitud->FechaFin=$request->get('FechaFin');
        $solicitud->Status=$request->get('Status');
        $solicitud->Descripcion=$request->get('Descripcion');
        $solicitud->ID_empleado=$request->get('ID_empleado');
        $solicitud->ID_coordinador=$request->get('ID_coordinador');
        $solicitud->ID_analista=$request->get('ID_analista');
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

/* 

public function peticion(Request $request)
    {
        $query=trim($request->get('searchText'));
        $analista=DB::table('Analista as a')
        ->join('Peticion as p','a.ID_peticion','=','p.ID_peticion')
        ->select('a.*','p.*')
        ->where('a.condicion','=','1')
        ->where('a.Nombre','LIKE','%'.$query.'%') 
        ->orwhere('p.Nombre')       
        ->orderBy('a.Nombre','asc')
        -> paginate(15);
           return view('revolution.analista.peticion',["analista"=>$analista,"searchText"=>$query]);
    }
*/