<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ReclutadorFormRequest;
Use App\Reclutador;
use App\User;
use Session;
use Auth;
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
        $user = new User;
        $user->email = $request->input('mail');
        $user->password = bcrypt( $request->input('password') );
        $user->rol = "reclutador";
        $user->save();
        $user = User::where('email', $request->input('mail'))->first();

        $reclutador= new Reclutador;

        $reclutador->Nombre=$request->get('Nombre');
        $reclutador->Papp=$request->get('Papp');
        $reclutador->Sapp=$request->get('Sapp');
        $reclutador->Telefono=$request->get('Telefono');
        $reclutador->foto='user-profile-icon.jpg';
        $reclutador->condicion='1';
        $reclutador->users_id = $user->id;
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
        $procedencia=$_GET['procedencia'];
        $reclutador= Reclutador::findOrFail($id);
        if ($procedencia=='perfil') {
             return view("revolution.reclutador.editPerfil",["reclutador"=>$reclutador]);
        }
        elseif($procedencia=='index'){
            return view("revolution.reclutador.edit",["reclutador"=>$reclutador]);
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

        $reclutador=Reclutador::findOrFail($id);
        $reclutador->Nombre=$request->get('Nombre');
        $reclutador->Papp=$request->get('Papp');
        $reclutador->Sapp=$request->get('Sapp');
        $reclutador->Telefono=$request->get('Telefono');
        if (Input::hasFile('foto')){
            $file = Input::file('foto');
            $file->move(public_path().'/imagenes/',$file->getClientOriginalName());
            $reclutador->foto = $file->getClientOriginalName();
        }
        $reclutador->update();
        if ($procedencia=='edit') {
            return Redirect::to('revolution/reclutador');
        }
        else
            return Redirect::to('/revolution/reclutador/inicio');
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

    public function post_Login()
    {
        $user = Auth::user();
        $recluta = Reclutador::where('users_id', $user->id)->first();
        if ($recluta->condicion===0) {
            return Redirect::to('auth/login');
        }
        Session::put('rol',$user->rol);
        Session::put('id',$recluta->ID_reclutador);

        return view('layouts.perfil_reclutador', ['user'=>$user, 'datos'=>$recluta]);
    }
}
