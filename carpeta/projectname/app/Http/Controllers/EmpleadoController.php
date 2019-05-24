<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmpleadoFormRequest;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Empleado;
use App\User;
use Session;
use Auth;
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
        $procedencia=Session::get('rol');
        if ($request)
        {
            $query=trim($request->get('searchText'));

            if($procedencia=='coordinador'){
                $empleado=DB::table('Empleado as empl')
                ->join('Empresa','empl.ID_empresa','=','Empresa.ID_empresa')
                ->select('empl.*','Empresa.Nombre as empresa','Empresa.condicion')
                ->where('empl.condicion','=','1')
                ->where('Empresa.condicion','=','1')
                ->where('empl.Nombre','LIKE','%'.$query.'%')          
                ->orderBy('Empresa.Nombre','asc')
                -> paginate(15);            
                return view('revolution.empleado.index',["empleado"=>$empleado,"searchText"=>$query])->with('vista',$vista);
            }
            else
                $empresa =Session::get('ID_empresa');
                $empleado=DB::table('Empleado as empl')
                ->join('Empresa','empl.ID_empresa','=','Empresa.ID_empresa')
                ->select('empl.*','Empresa.Nombre as empresa')
                ->where('empl.condicion','=','1')
                ->where('Empresa.condicion','=','1')
                ->where('empl.ID_empresa','=',''.$empresa.'')          
                ->orderBy('Empresa.Nombre','asc')
                -> paginate(15);        
                return view('cliente.empleado.encargados',["empleado"=>$empleado,"searchText"=>$query])->with('vista',$vista);
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
     * Store a newly cr        $procedencia=Session::get('rol');
eated resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoFormRequest $request)
    {
        $user = new User;
        $user->email = $request->input('mail');
        $user->password = bcrypt( $request->input('password') );
        $user->rol = "empleado";
        $user->save();
        $user = User::where('email', $request->input('mail'))->first();

        $empleado=new Empleado;
        //'nombre' es obj creado del request
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Papp=$request->get('Ṕapp');
        $empleado->Sapp=$request->get('Sapp');
        $empleado->Telefono=$request->get('Telefono');
        $empleado->puesto=$request->get('puesto');
        $empleado->ID_empresa=$request->get('ID_empresa');
        $empleado->foto='user-profile-icon.jpg';
        $empleado->condicion='1';
        $empleado->users_id = $user->id;
        $empleado->save();

        
        
        return Redirect::to('revolution/empleado'); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $vista="empleado";
        if ($request)
        {
           $query=trim($request->get('searchText'));
           $empleado=DB::table('Empleado as empl')
           ->join('Empresa','empl.ID_empresa','=','Empresa.ID_empresa')
           ->select('empl.*')
           ->where('empl.condicion','=','1')
           ->where('empl.Nombre','LIKE','%'.$query.'%')
           ->where('empl.ID_empresa','=','1')          
           ->orderBy('empl.Nombre','asc')
           -> paginate(15);
           return view('cliente.show',["empleado"=>$empleado,"searchText"=>$query])->with('vista',$vista);
        }
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
        $empleado=Empleado::findOrFail($id);
        $empresa=DB::table('Empresa')
        ->where('condicion','=','1')
        ->get();

        if ($procedencia=='perfil') {
             return view("cliente.editPerfil",["empleado"=>$empleado]);
        }
        elseif($procedencia=='index'){
            return view("revolution.empleado.edit",["empleado"=>$empleado,"empresa"=>$empresa]);
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

        $empleado=Empleado::findOrFail($id);
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Papp=$request->get('Papp');
        $empleado->Sapp=$request->get('Sapp');
        $empleado->Telefono=$request->get('Telefono');
        $empleado->puesto=$request->get('puesto');
        if (Input::hasFile('foto')){
            $file = Input::file('foto');
            $file->move(public_path().'/imagenes/',$file->getClientOriginalName());
            $empleado->foto = $file->getClientOriginalName();
        }
        $empleado->update();

        if ($procedencia=='edit') {
            return Redirect::to('revolution/empleado');
        }
        else
            return Redirect::to('cliente/inicio');
        
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

    public function post_Login()
    {
        $user = Auth::user();
        $empleado = Empleado::where('users_id', $user->id)->first();
        if ($empleado->condicion===0) {
            return Redirect::to('auth/login');
        }
        
        Session::put(['id'=>$empleado->ID_empleado,'ID_empresa'=>$empleado->ID_empresa,'rol'=>$user->rol]);
        return view('layouts.perfil_empleado', ['user'=>$user, 'datos'=>$empleado]);
    }

}