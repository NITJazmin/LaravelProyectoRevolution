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
           $empleado=DB::table('Empleado as empl')
           ->join('Empresa as emp','empl.ID_empresa','=','emp.ID_empresa')
           ->select('empl.Nombre','empl.Papp','empl.Sapp','empl.Telefono','empl.email')
           ->where('empl.Nombre','LIKE','%'.$query.'%')
           ->orderBy('empl.ID_empleado','asc')
           -> paginate(15);
           return view('revolution.empleado.index',["empleado"=>$empleado,"searchText"=>$query])->with('vista',$vista);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coordinador=DB::table('Coordinador')
        ->where('condicion','=','1')
        ->get();
        return view("revolution.empleado.create",["coordinador"=>$coordinador]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoFormRequest $request)
    {
        $empleado=new Empleado;
        //'nombre' es obj creado del request
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Papp=$request->get('PrimerApellido');
        $empleado->Sapp=$request->get('SegundoApellido');
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
        return view("revolution.empleado.show",["empleado"=>Empleado::findOrfile($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=Empleado::findOrfile($id);
        $coordinador=DB::table('Coordinador')
        ->where('condicion','=','1')
        ->get();
        return view("revolution.empleado.edit",["empleado"=>$empleado,"coordinador"=>$coordinador]);
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
        $empleado=Coordinador::findOrfile($id);

        $empleado->Nombre=$request->get('Nombre');
        $empleado->Papp=$request->get('Primer Apellido');
        $empleado->Sapp=$request->get('Segundo Apellido');
        $empleado->Telefono=$request->get('Telefono');
        $empleado->email=$request->get('email');
        $empleado->ID_empleado->get('ID_empleado');

        $empleado->update();
        return Redirect::to('revolution/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado=Empresa::findOrfile($id);
        $empleado->condicion='0';
        $empleado->update();
        return Redirect::to('revolution/empleado');
    }
}
