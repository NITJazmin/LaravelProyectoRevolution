<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\PerfiladorFormRequest;
use App\Caracteristicas;
use App\Reclutamiento;
use App\DatosContacto;
use App\Prestacion;
use App\Educacion;
use Session;
use PDF;
use DB;

class PerfiladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=$_GET['id'];
        //el id que se recibe es el de la peticion;
        return view('revolution.perfilador.create')->with('id',$id);;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(PerfiladorFormRequest $request)
    {
        $datos=new DatosContacto;
        $carac=new Caracteristicas;        
        $reclu=new Reclutamiento;
        $prest=new Prestacion;
        $educa=new Educacion;
        $this->putContacto($request,$datos);
        $this->putCaracteristicas($request,$carac,$datos->ID_datos);
        $this->putEducacion($request,$educa,$datos->ID_datos);
        $this->putPrestacion($request,$prest,$datos->ID_datos);
        $this->putReclutamiento($request,$reclu,$datos->ID_datos);
        //return view('revolution.perfilador.index',['datos'=>$datos,'carac'=>$carac]);
        return Redirect::to('/cliente/peticion/solicitud'); 
    }

    public function putContacto(PerfiladorFormRequest $request,DatosContacto $datos)
    {
       
        $datos->razonSocial=$request->get('razonSocial');
        $datos->nombre=$request->get('nombre');
        $datos->giro=$request->get('giro');
        $datos->tamano=$request->get('tamano');
        $datos->direccion=$request->get('direccion');
        $datos->contacto=$request->get('contacto');
        $datos->cargo=$request->get('cargo');
        $datos->telefono=$request->get('telefono');
        $datos->email=$request->get('email'); 
        $datos->ID_peticion=$request->get('ID_peticion');
        $datos->condicion='1';       
        $datos->save();
        return;
    }
    public function putCaracteristicas(PerfiladorFormRequest $request,Caracteristicas $datos, $contacto)
    {
        $datos->puesto=$request->get('puesto');
        $datos->cantidad=$request->get('cantidad');
        $datos->objetivo=$request->get('objetivo');
        $datos->actividades=$request->get('actividades');
        $datos->reporte=$request->get('reporte');
        $datos->diasLab=$request->get('diasLab');
        $datos->horario=$request->get('horario');
        $datos->lugar=$request->get('lugar');
        $datos->rangoEdad=$request->get('rangoEdad');
        $datos->sexo=$request->get('sexo');
        $datos->estadoCivil=$request->get('estadoCivil');
        $datos->actoresInternos=$request->get('actoresInternos');
        $datos->actoresExternos=$request->get('actoresExternos');
        $datos->ID_datos=$contacto;
        $datos->condicion='1';       
        $datos->save();
        return;
    }
   public function putEducacion(PerfiladorFormRequest $request,Educacion $datos,$contacto)
    {       
        $datos->escolaridad=$request->get('escolaridad');
        $datos->conocimientos=$request->get('conocimientos');
        $datos->experiencia=$request->get('experiencia');
        $datos->competencias=$request->get('competencias');
        $datos->habilidades=$request->get('habilidades');
        $datos->office=$request->get('office');
        $datos->funcionesOffice=$request->get('funcionesOffice');
        $datos->adicional=$request->get('adicional');
        $datos->funcionesAdicional=$request->get('funcionesAdicional');
        $datos->herramientas=$request->get('herramientas');
        $datos->idiomas=$request->get('idiomas');
        $datos->ID_datos=$contacto;
        $datos->condicion='1';       
        $datos->save();
        return;
    } 
    public function putPrestacion(PerfiladorFormRequest $request,Prestacion $datos,$contacto)
    { 
        $datos->sueldo=$request->get('sueldo');
        $datos->pago=$request->get('pago');
        $datos->prestaciones=$request->get('prestaciones');
        $datos->comisiones=$request->get('comisiones');
        $datos->metricas=$request->get('metricas');
        $datos->ID_datos=$contacto;
        $datos->condicion='1';       
        $datos->save();
        return;
    }    
    public function putReclutamiento(PerfiladorFormRequest $request,Reclutamiento $datos,$contacto)
    {
        $datos->entrevistas=$request->get('entrevistas');
        $datos->entrevistador=$request->get('entrevistador');
        $datos->sustituto=$request->get('sustituto');
        $datos->psicometrico=$request->get('psicometrico');
        $datos->ese=$request->get('ese');
        $datos->particularidad=$request->get('particularidad');
        $datos->fechMax=$request->get('fechMax');
        $datos->rechazo=$request->get('rechazo');
        $datos->comentarios=$request->get('comentarios');
        $datos->ID_datos=$contacto;
        $datos->condicion='1';       
        $datos->save();
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //EL id que se recibe es el de la peticion
       $contacto=DB::table('DatosContacto')
        ->where('ID_peticion','=',$id)
        ->first();

        $carac=DB::table('Caracteristicas')
        ->where('ID_datos','=',$contacto->ID_datos)
        ->first();

        $educa=DB::table('Educacion')
        ->where('ID_datos','=',$contacto->ID_datos)
        ->first();

        $prest=DB::table('Prestacion')
        ->where('ID_datos','=',$contacto->ID_datos)
        ->first();

        $reclu=DB::table('Reclutamiento')
        ->where('ID_datos','=',$contacto->ID_datos)
        ->first();
        //return var_dump($contacto);
        //return $contacto->ID_datos;
        return view('revolution.perfilador.show',["contacto"=>$contacto,'carac'=>$carac,'educa'=>$educa,'prest'=>$prest,'reclu'=>$reclu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
