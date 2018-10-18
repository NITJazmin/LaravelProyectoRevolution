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
        {
           $query=trim($request->get('searchText'));
           $solicitud=DB::table('Peticion as sol')
           ->join('Empleado as empl','sol.ID_empleado','=','empl.ID_empleado')
           ->join('CoordinadorRev as coor','sol.ID_coordinador','=','coor.ID_coordinador')
           ->select('sol.*','empl.Nombre as empleado','empl.Papp','empl.Sapp','coor.Nombre as coordinador','coor.Papp as apellido')


           ->where('sol.condicion','=','1')
           ->where('sol.Nombre','LIKE','%'.$query.'%')
           ->orwhere('empl.Nombre','LIKE','%'.$query.'%')           
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
