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
    /**
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
           return view('revolution.empresa.index',["empresa"=>$empresa,"searchText"=>$query,$vista]);
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
        $empresa->Telefono=$request->get('Telefono');
        $empresa->condicion='1';
        $empresa->save();
        //Después de guardar nos redireccionamos a la carpeta coordinador
        return Redirect::to('revolution/empresa');
    }


}
