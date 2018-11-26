<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\EstudiosFormRequest;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Input;
use App\DatosSocioE;
use App\DatosPersonales;
use App\RefLab;
use App\Psicosocial;
use App\Referencias;
use Session;
use PDF;
use DB;

class EstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('revolution.estudios.create')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudiosFormRequest $request)
    {
        
        $datos=new DatosSocioE;
        $personales=new DatosPersonales;
        $psicosocial=new Psicosocial;
        $this->putDatosSocioE($request,$datos);
        $this->putDatosPersonales($request,$personales,$datos->ID_estudio);
        $this->putPsicosocial($request,$psicosocial,$datos->ID_estudio);
        /*Para crear las tres referencias Labprales*/
        for ($i=1; $i<=3 ; $i=$i+1) { 
            $refLab =new RefLab;
            $this->putRefLab($request,$refLab,$datos->ID_estudio,$i);            
        }
        /*Para crear las 3 referencias laborales y personales*/
        for ($i=1; $i <= 6; $i++) { 
            $ref=new Referencias;
            if ($i<=3) {
                $this->putReferencias($request,$ref,$datos->ID_estudio,'personales',$i);
            }
            else
                $this->putReferencias($request,$ref,$datos->ID_estudio,'familiares',$i);
        }
        return Redirect::to('/revolution/peticion/solicitud_analista'); 
    }
    public function putDatosSocioE(EstudiosFormRequest $request,DatosSocioE $datos)
    {
        $datos->nombrePostulado=$request->get('nombrePostulado');
        $datos->puestoSol=$request->get('puestoSol');
        $datos->fechSol=$request->get('fechSol');
        $datos->fechEntr=$request->get('fechEntr');
        $datos->atencion=$request->get('atencion');
        $datos->region=$request->get('region');
        $datos->telefonica=$request->get('telefonica');
        $datos->familiar=$request->get('familiar');
        $datos->laboral=$request->get('laboral'); 
        $datos->psicosocial=$request->get('psicosocial');
        $datos->factorRiesgo=$request->get('factorRiesgo');
        $datos->deshonestidad=$request->get('deshonestidad'); 
        $datos->obsHonestidad=$request->get('obsHonestidad');
        $datos->Obsadic=$request->get('Obsadic'); 
        $datos->perversion=$request->get('perversion');
        $datos->Obsperv=$request->get('Obsperv');
        $datos->inestabilidadEmo=$request->get('inestabilidadEmo'); 
        $datos->ObsEmo=$request->get('ObsEmo');
        $datos->resultado=$request->get('resultado');
        $datos->resRefLab=$request->get('resRefLab'); 
        if (Input::hasFile('mapa')){
            $file = Input::file('mapa');
            $file->move(public_path().'/imagenes/',$file->getClientOriginalName());
            $datos->mapa = $file->getClientOriginalName();
        } 
        $datos->ID_peticion=$request->get('ID_peticion');
        $datos->condicion='1';       
        $datos->save();
        return;
    }
    public function putDatosPersonales(EstudiosFormRequest $request,DatosPersonales $datos,$estudio)
    {
        $datos->nombre=$request->get('nombre');
        $datos->fechEval=$request->get('fechEval');
        $datos->edad=$request->get('edad');
        $datos->fechNac=$request->get('fechNac');
        $datos->lugarNac=$request->get('lugarNac');
        $datos->edoCivil=$request->get('edoCivil');
        $datos->gradoAcad=$request->get('gradoAcad');
        $datos->telCasa=$request->get('telCasa');
        $datos->tipoVivienda=$request->get('tipoVivienda');      
        if (Input::hasFile('foto')){
            $file = Input::file('foto');
            $file->move(public_path().'/imagenes/',$file->getClientOriginalName());
            $datos->foto = $file->getClientOriginalName();
        } 
        if (Input::hasFile('anexos')){
            $file = Input::file('anexos');
            $file->move(public_path().'/imagenes/',$file->getClientOriginalName());
            $datos->anexos = $file->getClientOriginalName();
        } 
        $datos->ID_estudio=$estudio;
        $datos->condicion='1';       
        $datos->save();
        return;
    }
    public function putRefLab(EstudiosFormRequest $request,RefLab $datos,$estudio,$i)
    {
        $datos->nomEmpresa=$request->get('nomEmpresa'.$i);
        $datos->giro=$request->get('giro'.$i);
        $datos->domicilio=$request->get('domicilio'.$i);
        $datos->colonia=$request->get('colonia'.$i);
        $datos->delMun=$request->get('delMun'.$i);
        $datos->ultimoPuesto=$request->get('ultimoPuesto'.$i);
        $datos->jefeInmediato=$request->get('jefeInmediato'.$i);
        $datos->fechIngreso=$request->get('fechIngreso'.$i);
        $datos->fechSalida=$request->get('fechSalida'.$i);
        $datos->sueldoIni=$request->get('sueldoIni'.$i);
        $datos->sueldoFinal=$request->get('sueldoFinal'.$i);
        $datos->motSalida=$request->get('motSalida'.$i);
        $datos->responsableRH=$request->get('responsableRH'.$i);
        $datos->comentarios=$request->get('comentarios'.$i);
        $datos->telefono=$request->get('telefono'.$i);
        $datos->puesto=$request->get('puesto'.$i); 
        $datos->ID_estudio=$estudio;
        $datos->condicion='1';      
        $datos->save();
        return;
    }
    public function putReferencias(EstudiosFormRequest $request,Referencias $datos,$estudio,$tipo,$i)
    {
        $datos->nombrePers=$request->get('nombrePers'.$i);
        $datos->telefonoPers=$request->get('telefonoPers'.$i);
        $datos->parentesco=$request->get('parentesco'.$i);
        $datos->tmpConocer=$request->get('tmpConocer'.$i);
        $datos->opinion=$request->get('opinion'.$i);
        $datos->recomienda=$request->get('recomienda'.$i);
        $datos->observacion=$request->get('observacion'.$i);
        $datos->tipoRef=$tipo; //2 tipos; Personal y Familiar
        $datos->ID_estudio=$estudio;
        $datos->condicion='1';      
        $datos->save();
        return;
    }
    public function putPsicosocial(EstudiosFormRequest $request,Psicosocial $datos,$estudio)
    {
        $datos->FacebookObs=$request->get('FacebookObs');
        $datos->LinkedObs=$request->get('LinkedObs');
        $datos->TwitterObs=$request->get('TwitterObs');
        $datos->Resultado=$request->get('Resultado');
        $datos->Certificado=$request->get('Certificado');
        $datos->ID_estudio=$estudio;
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
        /*viene de: 
            revolution/peticion/solicitud || 
            revolution/perfilador/show
         */
        $procedencia=$_GET['procedencia'];
        //EL id que se recibe es el de la peticion
        $empleado=DB::table('Empleado as empl')
        ->join('Peticion','empl.ID_empleado','=','Peticion.ID_empleado')
        ->select('empl.*')
        ->where('Peticion.ID_peticion','=',$id)   
        ->first();

        $estudio=DB::table('DatosSocioE')
        ->where('ID_peticion','=',$id)
        ->first();

        if($estudio == NULL)
        {
            Flash::warning("Aún no has iniciado proceso");
            return Redirect::to('revolution/peticion/show');
        }

        $personales=DB::table('DatosPersonales')
        ->where('ID_estudio','=',$estudio->ID_estudio)
        ->first();

        $psicosocial=DB::table('Psicosocial')
        ->where('ID_estudio','=',$estudio->ID_estudio)
        ->first();

        $refLab=DB::table('RefLab')
        ->where('ID_estudio','=',$estudio->ID_estudio)
        ->get();
        

        $referencias=DB::table('Referencias')
        ->where('ID_estudio','=',$estudio->ID_estudio)
        ->get();

        if ($procedencia=='solicitud') {
            return view('revolution.estudios.show',['empleado'=>$empleado,"estudio"=>$estudio,'personales'=>$personales,'psicosocial'=>$psicosocial,'refLab'=>$refLab,'referencias'=>$referencias]);
        }
        elseif ($procedencia=='show') {
            return view('revolution.estudio.edit',['estudio'=>$estudo,'personales'=>$personales,'psicosocial'=>$psicosocial,'refLab'=>$refLab,'referencias'=>$referencias]);
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
