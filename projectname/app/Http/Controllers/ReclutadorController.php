<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Reclutador;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ReclutadorFormRequest;
Use DB;

class ReclutadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vista="reclutador";
        if ($request) {
            $query=trim($request->get('searchText'));
            $reclutador=DB::table('Reclutador')
            ->where('condicion','=','1')
            ->where('Nombre','LIKE','%'.$query.'%')
            ->orderBy('ID_reclutador','asc')
            -> paginate(15);
            return view('revolution.reclutador.index',["reclutador"=>$reclutador,"searchText"=>$query])->with('vista',$vista);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revolution.reclutador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReclutadorFormRequest $request)
    {
        $reclutador= new Reclutador;
        $reclutador->Nombre=$request->get('Nombre');
        $reclutador->Papp=$request->get('Papp');
        $reclutador->Sapp=$request->get('Sapp');
        $reclutador->Telefono=$request->get('Telefono');
        $reclutador->condicion='1';
        $reclutador->save();
        return Redirect::to('revolution/reclutador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reclutador= Reclutador::findOrFail($id);
        return view("revolution.reclutador.edit",["reclutador"=>$reclutador]);
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
        $reclutador=Reclutador::findOrFail($id);
        $reclutador->Nombre=$request->get('Nombre');
        $reclutador->Papp=$request->get('Papp');
        $reclutador->Sapp=$request->get('Sapp');
        $reclutador->update();
        return Redirect::to('revolution/reclutador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reclutador=Reclutador::findOrFail($id);
        $reclutador->condicion='0';
        $reclutador->update();
        return Redirect::to('revolution/reclutador');
    }
}
