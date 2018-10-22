<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CoordinadorRev;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CoordinadorRevFormRequest;
use DB;

class CoordinadorRevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vista="coordinador";
        if ($request)
        {
           $query=trim($request->get('searchText'));
           $coordinador=DB::table('CoordinadorRev')
           ->where('Nombre','LIKE','%'.$query.'%')
           ->orwhere('Papp','LIKE','%'.$query.'%')
           ->orwhere('Sapp','LIKE','%'.$query.'%')
           ->where('condicion','=','1')
           ->orderBy('ID_coordinador','asc')
           -> paginate(15);
           return view('revolution.coordinador.index',["coordinador"=>$coordinador,"searchText"=>$query])->with('vista',$vista);
        }
        //return view('revolution.coordinador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revolution.coordinador.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoordinadorRevFormRequest $request)
    {
        $coordinador=new CoordinadorRev;
        //'nombre' es obj creado del request
        $coordinador->Nombre=$request->get('Nombre');
        $coordinador->Papp=$request->get('Sapp');
        $coordinador->Sapp=$request->get('Sapp');
        $coordinador->condicion='1';
        $coordinador->save();
        //Después de guardar nos redireccionamos a la carpeta coordinador
        return Redirect::to('revolution/coordinador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("revolution.coordinador.show",["coordinador"=>CoordinadorRev::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("revolution.coordinador.edit",["coordinador"=>CoordinadorRev::findOrFail($id)]);
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
        $coordinador=CoordinadorRev::findOrFail($id);
        $coordinador->Nombre=$request->get('Nombre');
        $coordinador->Papp=$request->get('Papp');
        $coordinador->Sapp=$request->get('Sapp');
        $coordinador->update();
        return Redirect::to('revolution/coordinador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $coordinador=CoordinadorRev::findOrFail($id);
        $coordinador->condicion='0';
        $coordinador->save();
        return Redirect::to('revolution/coordinador');
    }
}
