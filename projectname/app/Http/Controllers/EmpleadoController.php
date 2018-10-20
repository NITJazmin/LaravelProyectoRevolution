<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmpleadoFormRequest;
use App\Empleado;
use App\Http\Controllers\Controller;
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
           ->join('Empresa','empl.ID_empresa','=','Empresa.ID_empresa')
           ->select('empl.ID_empleado','empl.Nombre','empl.Papp','empl.Sapp','empl.Telefono','empl.puesto','Empresa.Nombre as empresa')
           ->where('empl.condicion','=','1')
           ->where('empl.Nombre','LIKE','%'.$query.'%')
           ->orwhere('empl.Papp','LIKE','%'.$query.'%')           
           ->orderBy('Empresa.Nombre','asc')
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
        $empresa=DB::table('Empresa')->where('condicion','=','1')->get();
        return view("revolution.empleado.create",["empresa"=>$empresa]); 
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
        $empleado->Papp=$request->get('Ṕapp');
        $empleado->Sapp=$request->get('Sapp');
        $empleado->Telefono=$request->get('Telefono');
        $empleado->puesto=$request->get('puesto');
        $empleado->ID_empresa=$request->get('ID_empresa');
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
        $empleado=Empleado::findOrFail($id);
        $empresa=DB::table('Empresa')
        ->where('condicion','=','1')
        ->get();
        return view("revolution.empleado.edit",["empleado"=>$empleado,"empresa"=>$empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoFormRequest $request, $id)
    {
        $empleado=Empleado::findOrFail($id);

        $empleado->Nombre=$request->get('Nombre');
        $empleado->Papp=$request->get('Papp');
        $empleado->Sapp=$request->get('Sapp');
        $empleado->Telefono=$request->get('Telefono');
        $empleado->puesto=$request->get('puesto');
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
        $empleado=Empleado::findOrFail($id);

        $empleado->condicion='0';
        $empleado->update();
        return Redirect::to('revolution/empleado');
    }


}
