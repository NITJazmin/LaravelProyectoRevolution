<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmpleadoFormRequest;
use DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vista="empleado";
        if ($request)
        {
           $query=trim($request->get('searchText'));
           $empleado=DB::table('Empleado')->where('Nombre','LIKE','%'.$query.'%')
           ->where('condicion','=','1')
           ->orderBy('ID_empleado','asc')
           -> paginate(15);
           return view('revolution.empleado.index',["empleado"=>$empleado,"searchText"=>$query,$vista]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revolution.empleado.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado=new Empleado;
        //'nombre' es obj creado del request
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Papp=$request->get('Primer Apellido');
        $empleado->Sapp=$request->get('Segundo Apellido');
        $empleado->Telefono=$request->get('Telefono');
        $empleado->email=$request->get('email');
        $empleado->ID_empleado->get('ID_empleado');
        $empleado->condicion='1';
        $empleado->save();
        //Después de guardar nos redireccionamos a la carpeta 
        return Redirect::to('revolution/empleado'); 
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
