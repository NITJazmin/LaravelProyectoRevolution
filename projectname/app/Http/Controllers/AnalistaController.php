<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnalistaFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Analista;
use App\User;
use Session;
use Auth;
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
           $analista=DB::table('Analista')
           ->where('condicion','=','1')
           ->where('Nombre','LIKE','%'.$query.'%')           
           ->orwhere('Papp','LIKE','%'.$query.'%')        
           ->orderBy('Nombre','asc')
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
        $peticion=DB::table('Peticion')->where('condicion','=','1')->get();
        return view("revolution.analista.create",["peticion"=>$peticion]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnalistaFormRequest $request)
    {
        $user = new User;
        $user->email = $request->input('mail');
        $user->password = bcrypt( $request->input('password') );
        $user->rol = "analista";
        $user->save();
        $user = User::where('email', $request->input('mail'))->first();

        $analista=new Analista;
        //'nombre' es obj creado del request
        $analista->Nombre=$request->get('Nombre');
        $analista->Papp=$request->get('ṔrimerApp');
        $analista->Sapp=$request->get('SegundoApp');
        $analista->Telefono=$request->get('Telefono');
        $analista->foto='user-profile-icon.jpg';
        $analista->condicion='1';
        $analista->users_id = $user->id;
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
        return view("revolution.analista.show",["analista"=>Analista::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedencia=$_GET['procedencia'];
        $analista=Analista::findOrFail($id);
        $peticion=DB::table('Peticion')
        ->where('condicion','=','1')
        ->get();

        if ($procedencia=='perfil') {
             return view("revolution.analista.editPerfil",["analista"=>$analista,"peticion"=>$peticion]);
        }
        elseif($procedencia=='index'){
            return view("revolution.analista.edit",["analista"=>$analista,"peticion"=>$peticion]);
        }

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
        $procedencia=$_POST['procedencia'];

        $analista=Analista::findOrFail($id);
        $analista->Nombre=$request->get('Nombre');
        $analista->Papp=$request->get('Papp');
        $analista->Sapp=$request->get('Sapp');
        $analista->Telefono=$request->get('Telefono');
        if (Input::hasFile('foto')){
            $file = Input::file('foto');
            $file->move(public_path().'/imagenes/',$file->getClientOriginalName());
            $analista->foto = $file->getClientOriginalName();
        }
        $analista->update();
        if ($procedencia=='edit') {
            return Redirect::to('revolution/analista');
        }
        else
            return Redirect::to('/revolution/analista/inicio');
        
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

    public function editPerfil($id)
    {
        $analista=Analista::findOrFail($id);
        $peticion=DB::table('Peticion')
        ->where('condicion','=','1')
        ->get();
        return view("revolution.analista.editPerfil",["analista"=>$analista,"peticion"=>$peticion]);
    }
    public function post_Login()
    {
        $user = Auth::user();
        $analista = Analista::where('users_id', $user->id)->first();
        if ($analista->condicion===0) {
            return Redirect::to('auth/login');
        }
        Session::put('rol',$user->rol);
        Session::put('id',$analista->ID_analista);
        return view('layouts.perfil_analista', ['user'=>$user, 'datos'=>$analista]);
    }

    
}
