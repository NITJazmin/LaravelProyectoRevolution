<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Empresa;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmpresaFormRequest;
use DB;

class EmpresaController extends Controller
{
    /**Empresa1Empresa1
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vista="empresa";
        if ($request)
        {
           $query=trim($request->get('searchText'));
           $empresa=DB::table('Empresa')->where('Nombre','LIKE','%'.$query.'%')
           ->where('condicion','=','1')
           ->orderBy('ID_empresa','asc')
           -> paginate(15);
           return view('revolution.empresa.index',["empresa"=>$empresa,"searchText"=>$query])->with('vista',$vista);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revolution.empresa.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaFormRequest $request)
    {
        $empresa=new Empresa;
        //'nombre' es obj creado del request
        $empresa->Nombre=$request->get('Nombre');
        $empresa->Giro=$request->get('Giro');
        $empresa->Direccion=$request->get('Direccion');
        $empresa->Telefono=$request->get('Telefono');
        $empresa->condicion='1';
        $empresa->save();
        //Después de guardar nos redireccionamos a la carpeta coordinador
        return Redirect::to('revolution/empresa'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("revolution.empresa.show",["empresa"=>Empresa::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("revolution.empresa.edit",["empresa"=>Empresa::findOrFail($id)]);
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
        $empresa=Empresa::findOrFail($id);
        $empresa->Nombre=$request->get('Nombre');
        $empresa->Giro=$request->get('Giro');
        $empresa->Direccion=$request->get('Direccion');
        $empresa->Telefono=$request->get('Telefono');
        $empresa->update();
        return Redirect::to('revolution/empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $empresa=Empresa::findOrFail($id);
       $empresa->condicion='0';
       $empresa->save();
        return Redirect::to('revolution/empresa');
    }


}
