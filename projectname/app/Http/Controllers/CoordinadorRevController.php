<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CoordinadorRev;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CoordinadorRevFormRequest;
use Illuminate\Support\Facades\DB;
class CoordinadorRevController extends Controller
{
    public function _construct()
    {

    }
    //CReamps obj con referencia al request que hicimos
    public function index(Request $request)
    {
        if ($request)
        {
    	   $query=trim($request->get('searchText'));
    	   $coordinador=DB::table('CoordinadorRev')->where('Nombre','LIKE','%'.$query.'%')
    	   ->where('condicion','=','1')
    	   ->orderBy('ID_coordinador','desc')
    	   ->paginate(2);	
    	   return view('revolution.coordinador.index',["coordinador"=>$coordinador,"searchText"=>$query]);
        }

    }
    public function create()
    {
    	//estas son las carpetas revolution/coordinador/
    	return view("revolution.coordinador.create");
    }
    public function store(CoordinadorRevFormRequest $request)
    {
    	$coordinador=new CoordinadorRev;
    								//'nombre' es obj creado del request
    	$coordinador->nombre=$request->get('nombre');
    	$coordinador->papp=$request->get('papp');
    	$coordinador->sapp=$request->get('sapp');
    	$coordinador->email=$request->get('email');
    	$coordinador->condicion='1';
    	$coordinador->save();
    	//Después de guardar nos redireccionamos a la carpeta coordinador
    	return Redirect::to('revolution/coordinador');
    }
    //====== solo mandamos a llamar las vistas con la variable de id los encontramos
    public function show($id)
    {
    	return view("revolution.coordinador.show",["coordinador"=>CoordinadorRev::findOrFail($id)]);
    }
    public function edit($id)
    {
    	return view("revolution.coordinador.edit",["coordinador"=>CoordinadorRev::findOrFail($id)]);

    }
    //============================================================
    public function update(CoordinadorRevFormRequest $request, $id)
    {
    	$coordinador=CoordinadorRev::findOrFail($id);
    	$coordinador->nombre=$request->get('nombre');
    	$coordinador->papp=$request->get('papp');
    	$coordinador->sapp=$request->get('sapp');
    	$coordinador->email=$request->get('email');
    	$coordinador->update();
    	return Redirect::to('revolution/coordinador');
    }
    public function destroy($id)
    {
    	$coordinador=CoordinadorRev::findOrFail($id);
    	$coordinador->condicion='0';
    	$coordinador->update();
    	return Redirect::to('revolution/coordinador');
    }






}
