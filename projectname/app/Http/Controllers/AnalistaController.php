<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnalistaFormRequest;
use Illuminate\Support\Facades\Redirect;
use App\Analista;
use DB;


class AnalistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vista="analista";
        if ($request)
        {
           $query=trim($request->get('searchText'));
           $analista=DB::table('Analista as a')
           ->join('CoordinadorRev as c','a.ID_coordinador','=','c.ID_coordinador')
           ->select('a.ID_analista','a.Nombre','a.Papp','a.Sapp','a.Telefono')
           ->where('a.condicion','=','1')
           ->where('a.Nombre','LIKE','%'.$query.'%')
           ->orwhere('a.Papp','LIKE','%'.$query.'%')           
           ->orderBy('a.Nombre','asc')
           -> paginate(15);
           return view('revolution.analista.index',["analista"=>$analista,"searchText"=>$query])->with('vista',$vista);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coordinador=DB::table('CoordinadorRev')->where('condicion','=','1')->get();
        return view("revolution.analista.create",["coordinador"=>$coordinador]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnalistaFormRequest $request)
    {
        $analista=new Analista;
        //'nombre' es obj creado del request
        $analista->Nombre=$request->get('Nombre');
        $analista->Papp=$request->get('ṔrimerApp');
        $analista->Sapp=$request->get('SegundoApp');
        $analista->Telefono=$request->get('Telefono');
        $analista->ID_coordinador=$request->get('ID_coordinador'); //pendiente de quitar //
        $analista->condicion='1';
        $analista->save();
        //Después de guardar nos redireccionamos a la carpeta 
        return Redirect::to('revolution/analista'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("revolution.analista.show",["analista"=>Analista::findOrfile($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $analista=Analista::findOrFail($id);
        $coordinador=DB::table('CoordinadorRev')
        ->where('condicion','=','1')
        ->get();
        return view("revolution.analista.edit",["analista"=>$analista,"coordinador"=>$coordinador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnalistaFormRequest $request, $id)
    {
        $analista=Analista::findOrFail($id);

        $analista->Nombre=$request->get('Nombre');
        $analista->Papp=$request->get('Papp');
        $analista->Sapp=$request->get('Sapp');
        $analista->Telefono=$request->get('Telefono');
        $analista->update();
        return Redirect::to('revolution/analista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analista=Analista::findOrFail($id);

        $analista->condicion='0';
        $analista->update();
        return Redirect::to('revolution/analista');
    }

}
