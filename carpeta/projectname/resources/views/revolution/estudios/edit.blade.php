@extends('layouts.analista')
@section('contenido')
 <link rel="stylesheet" href="{{ asset('css1/estudios.css') }}">

{!! Form::open(array('action'=>['EstudiosController@update',$estudio->ID_estudio],'method'=>'PUT','autocomplete'=>'off')) !!}

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<!--===============================Formulario del modelo EstudioSocioE===================== -->	
<div class="table-responsive cuadro">
	<table class="table ">
			<th class="encabezado">RESULTADO DE INVESTIGACION SOCIOECONOMICA Y PSICOLOGICA REALIZADA A:</th>	
		<tbody>
			<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table">
				<tr>
					<td><img src="{{asset('imagenes/'.$personales->foto)}}" class="foto" ></td>
					<td style="width: 70%;">
						<label class="color" >Nombre:</label> 
							<input type="text" name="nombrePostulado" value=" {{$estudio->nombrePostulado}}" class="form-control"><br>
						<label class="color">Puesto:</label> 
							<input type="text" name="puestoSol" value=" {{$estudio->puestoSol}}" class="form-control"><br>
						<label class="color">Fecha de solicitud:</label> 
							<input type="date" name="fechSol" value=" {{$estudio->fechSol}}" class="form-control"><br>
						<label class="color">Fecha de entrega:</label>
							<input type="date" name="fechEntr" value="  {{$estudio->fechEntr}}" class="form-control"><br>
						<label class="color">Atencion a:</label> 
							<input type="text" name="atencion" value=" {{$estudio->atencion}}" class="form-control"><br>
						<label class="color">Region:</label> 
							<input type="text" name="region" value=" {{$estudio->region}}" class="form-control"><br>
					</td>	
				</tr>
			</table>
		</tbody>
	</table>
</div>
<br>
<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">Resumen investigacion telefonica:</th>
		</thead>
		<tbody>
			<table class="contenido">
				<tr>
					<td>
						<textarea  name="telefonica" value="{{$estudio->telefonica}}" class="form-control" rows="7" cols="120"></textarea>
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div>
<br>
<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">Resumen investigacion familiar:</th>
		</thead>
		<tbody>
			<table class="contenido">
				<tr>
					<td>
						<textarea name="telefonica" class="form-control" rows="7" cols="60">{{$estudio->familiar}}</textarea>
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div>
<br>
<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">Resumen investigacion laboral:</th>
		</thead>
		<tbody>
			<table class="contenido">
				<tr>
					<td>
						<textarea name="telefonica" value=" {{$estudio->laboral}}" class="form-control" rows="7" cols="60"></textarea>	
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div>
<br>
<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">Resumen investigacion psicosocial:</th>
		</thead>
		<tbody>
			<table class="contenido">
				<tr>
					<td>
						<textarea name="telefonica" value=" {{$estudio->psicosocial}}" class="form-control" rows="7" cols="60"></textarea> 
					</td>
					<td>
					<input type="hidden" name="ID_peticion" value="{{$estudio->ID_peticion}}">
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div>

<div class="titulo">
	<label>Existen factores de riesgo: (Marque si se encontro algun factor de riesgo para considerar por el cliente)</label>
</div><br>
<div class="table-responsive cuadro">
	<table class="table table-bordered contenido">
		<thead >
			<th class="encabezado">Factor Riesgo</th>
			<th class="encabezado">Observaciones</th>
		</thead>
			<tr>
				<td class="color posicion">
					Deshonestidad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="deshonestidad" name="deshonestidad" class="checkbox-inline">
				</td>
				<td >
					<input type="text" name="Obshonestidad" value=" {{$estudio->obsHonestidad}}" class="form-control">
				</td>
			</tr>
			<tr>
				<td class="color posicion">
					Adicciones &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="adicciones" name="adicciones" class="checkbox-inline">
				</td>
				<td>
					<input type="text" name="Obsadic" value=" {{$estudio->Obsadic}}" class="form-control">
				</td>
			</tr>
				<tr>
				<td class="color posicion">
					Perversion sexual &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" value="perversion" name="perversion" class="checkbox-inline">
				</td>
				<td>
					<input type="text" name="Obsperv" value=" {{$estudio->Obsperv}}" class="form-control">
				</td>
			</tr>
			<tr>
				<td class="color posicion">
					Inestabilidad emocional &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="inestabilidadEmo" name="inestabilidadEmoci" class="checkbox-inline">
				</td>
				<td >
					<input type="text" name="ObsEmo" value=" {{$estudio->ObsEmo}}" class="form-control">
				</td>
			</tr>
	</table>
</div>

<div class="titulo">
	<label>SUGERENCIA DE RESULTADO</label>
</div><br>
<div class="row cuadro2">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
		<div >
			<label >Certificado </label>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
		<div class="form-group">
				<input type="checkbox" value="Certificado" name="resultado" class="checkbox-inline">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
		<div class="form-group">					
			<label>Certificado con Reservas</label>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
		<div class="form-group ">
				<input type="checkbox" value="Certificado con Reservas" name="resultado" class="checkbox-inline">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
		<div class="form-group">	
			<label>No Certificado</label>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
		<div class="form-group ">
				<input type="checkbox" value="NoCertificado" name="resultado" class="checkbox-inline">
		</div>
	</div>		
</div><br>

<!--====================Formulario del modelo DatosPersonales====================================-->
<!--===========================Inicioo encabezado de estudio=====================================-->
<div class="cuadro">
	<div class="row  marco">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
			<div class="form-group">
				<label class="color">Nombre del evaluado:</label>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 linea2">
			<div class="form-group">
				<input type="text" name="nombre" value=" {{$personales->nombre}}" class="form-control">
				<input type="hidden" name="ID_datP" value="{{$personales->ID_datP}}">
			</div>
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
			<div class="form-group">
				<label class="color">Puesto Solicitado:</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
			<div class="form-group">
				<input type="text" name="puestoSol" value=" {{$estudio->puestoSol}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
			<div class="form-group">
				<label class="color">Fecha de Evaliación:</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
			<div class="form-group">
				<input type="text" name="fechEval" value=" {{$personales->fechEval}}" class="form-control">
			</div>
		</div>
	</div>	
</div>
<!--========================Fin de encabezado de estudio=========================================-->

<div class="encabezado2 titulo cuadro">
	<label>Datos Generales</label>
</div><br>
<div class="cuadro">
	<div class="row marco">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6 linea1 contenido2">
			<div >
				<label class="color">Edad:</label>
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-2 col-xs-6 linea2 contenido2">
			<div >
				<input type="text" name="edad" value=" {{$personales->edad}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div >
				<label class="color">Fecha de nacimiento:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div >
				<input type="date" name="fechNac" value=" {{$personales->fechNac}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div >
				<label class="color">Lugar de Nacimiento:</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 linea2">
			<div >
				<input type="text" name="lugarNac" value=" {{$personales->lugarNac}}" class="form-control">
			</div>
		</div>
	</div>
	<div class="row marco ">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div >
				<label class="color">Estado Civil:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div >
				<input type="text" name="edoCivil" value=" {{$personales->edoCivil}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div >
				<label class="color">Grado Académico:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div>
				<input type="text" name="gradoAcad" value=" {{$personales->gradoAcad}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div >
				<label class="color">Teléfono de Casa:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
			<div>
				<input type="text" name="telCasa" value=" {{$personales->telCasa}}" class="form-control">
			</div>
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linea2">
			<div>
				<label class="color">Vive en casa:</label>
			</div>
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<div>
				<label class="color">Propia:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<div>
				<input type="checkbox" value="Propia" name="tipoVivienda" class="checkbox-inline">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<div>
				<label class="color">Rentada:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<div>
				<input type="checkbox" value="Rentada" name="tipoVivienda" class="checkbox-inline">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<div>
				<label class="color">De familiares:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<div>
				<input type="checkbox" value="Rentada" name="tipoVivienda" class="checkbox-inline">
			</div>
		</div>
	</div>
</div><br>

<!--====================================Formulario del modelo RefLab=========================-->
<div class="encabezado2 titulo cuadro2">
		<label>I. Referencias Laborales</label>
</div><br>
<!--============Imprimen referencias laborales con el foreach===============================-->
	<?php $i=1; ?> <!--Contador para cambiar el titutlo de la informacion-->
	@foreach($refLab as $refLab)

<div class="encabezado2 cuadro2">
	<!--Las variales loop no compatibles con laravel 5.1-->
	<?php if ($i==1){?>
		<label>Último empleo o actual</label>
	<?php }if ($i==2){?>
		<label>Penúltimo empleo</label>
	<?php }if ($i==3){?>
		<label>Antepenúltimo empleo</label>
	<?php }  ?>	
</div>
<div class="cuadro">
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Nombre de la Empresa:</label>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
			<input type="text" name="{{'nomEmpresa'.$i}}" value="{{$refLab->nomEmpresa}}"  class="form-control" >				
			<input type="hidden" name="{{'ID_refLab'.$i}}" value="{{$refLab->ID_refLab}}">	
			<input type="hidden" name="i{{$i}}" value="{{$i}}">	
			<p>{{$i}}</p>		
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Giro:</label>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
			<input type="text" name="{{'giro'.$i}}" value="{{$refLab->giro}}"  class="form-control" >
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Domicilio:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'domicilio'.$i}}" value="{{$refLab->domicilio}}"  class="form-control" >
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Colonia:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'colonia'.$i}}" value="{{$refLab->colonia}}"  class="form-control" >
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
			<label class="color">Delegación/Municipio:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'delMun'.$i}}" value="{{$refLab->delMun}}"  class="form-control" >
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Telefono:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'telefono'.$i}}" value="{{$refLab->telefono}}"  class="form-control" >
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Último puesto:</label>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
			<input type="text" name="{{'ultimoPuesto'.$i}}" value="{{$refLab->ultimoPuesto}}"  class="form-control" >
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Jefe inmediato:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'jefeInmediato'.$i}}" value="{{$refLab->jefeInmediato}}"  class="form-control" >
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Puesto:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'puesto'.$i}}" value="{{$refLab->puesto}}"  class="form-control">
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Fecha de ingreso:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="date" name="{{'fechIngreso'.$i}}" value="{{$refLab->fechIngreso}}"  class="form-control">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Fecha de salida:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="date" name="{{'fechSalida'.$i}}" value="{{$refLab->fechSalida}}"  class="form-control">
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Sueldo inicial:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'sueldoIni'.$i}}" value="{{$refLab->sueldoIni}}"  class="form-control">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Sueldo final:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
			<input type="text" name="{{'sueldoFinal'.$i}}" value="{{$refLab->sueldoFinal}}"  class="form-control">
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Motivo de salida:</label>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
			<input type="text" name="{{'motSalida'.$i}}" value="{{$refLab->motSalida}}"  class="form-control">
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Nombre de responsable de RH:</label>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
			<input type="text" name="{{'responsableRH'.$i}}" value="{{$refLab->responsableRH}}"  class="form-control">
		</div>
	</div>
	<div class="row marco">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Comentarios:</label>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
			<input type="text" name="{{'comentarios'.$i}}" value="{{$refLab->comentarios}}"  class="form-control">
		</div>
	</div>
	<?php $i=1+$i; ?>
</div><br>
	@endforeach

<!--==============================Modelo DatosSocioE==========================================-->
<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">RESULTADO DE REFERENCIAS LABORALES:</th>
		</thead>
		<tbody>
			<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenido">
				<tr>
					<td>
						<textarea name="resRefLab" value="{{$estudio->resRefLab}}" class="form-control" rows="7" cols="60"></textarea>
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div><br>

<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">MAPA DE UBICACIÓN DE VIVIENDA:</th>
		</thead>
		<tbody>
			<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenido">
				<tr>
					<td>
						<textarea name="" class="form-control" value="{{$estudio->mapa}} "rows="7" cols="60"></textarea>
						<input type="file" name="mapa" class="form-control" placeholder="Foto del aspirante">
						
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div><br>

<!--===============================Modelo Referencas=============================================-->
<?php $i=1; $j=1;?> <!--Contador para cambiar el titutlo de la informacion-->
@foreach($referencias as $ref)
<?php if ($j==1){?>
	<div class="encabezado2 titulo cuadro ">
		<label>II. Referencias Personales</label>
	</div>	
	<br>
<?php }if ($j==4){?>
	<div class="encabezado2 titulo cuadro ">
		<label>III. Referencias Familiares</label>
	</div>	
	<br>
	<?php $j=1; } ?>
	<div  class="encabezado2 cuadro2">
		<label>Referencia {{$j}}</label>		
	</div>
	<div class="cuadro linea2">
		<div class="row marco">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="color">Nombre:</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 linea2">
				<input type="text" name="{{'nombrePers'.$i}}" value="{{$ref->nombrePers}}" class="form-control" >
				<input type="hidden" name="{{'ID_referencias'.$i}}" value="{{$ref->ID_referencias}}" class="form-control" >
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="color">Telefono:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<input type="text" name="{{'telefonoPers'.$i}}" value="{{$ref->telefonoPers}}" class="form-control" >
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="color">Parentesco:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<input type="text" name="{{'parentesco'.$i}}" value="{{$ref->parentesco}}" class="form-control" >
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
				<label class="color">¿Cuánto tiempo tiene de conocerlo?:</label>
				<input type="text" name="{{'tmpConocer'.$i}}" value="{{$ref->tmpConocer}}" class="form-control" >
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
				<label class="color">¿Qué opinión tiene de él?:</label>
				<input type="text" name="{{'opinion'.$i}}" value="{{$ref->opinion}}" class="form-control" >
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
				<label class="color">¿Lo recomendaría para laborar con nosotros?:</label>
				<input type="text" name="{{'recomienda'.$i}}" value="{{$ref->recomienda}}" class="form-control" >
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<label class="color">Observaciones:</label>
				<input type="text" name="{{'observacion'.$i}}" value="{{$ref->observacion}}" class="form-control" >
			</div>
		</div>
		<?php $i=$i+1; $j=$j+1;?>
	</div>
@endforeach
<br>
<!--===================================Modelo Psicosocial========================================-->
<div  class="encabezado2 cuadro2">
	<label>IV Referencias PSicosociales</label>
</div><br>

<div class="table-responsive cuadro">
	<table class="table table-bordered contenido">
		<thead >
			<th class="encabezado">Redes Sociales</th>
			<th class="encabezado">Observaciones</th>
		</thead>
			<tr>
				<th class="color posicion">
					Facebook: 
				</th>
				<td >
					<input type="text" name="FacebookObs" value="{{$psicosocial->FacebookObs}}" class="form-control" >
					<input type="hidden" name="ID_psicosocial" value="{{$psicosocial->ID_psicosocial}}" class="form-control" >
				</td>
			</tr>
			<tr>
				<th class="color posicion">
					Linkedin:
				</th>
				<td>
					<input type="text" name="LinkedObs" value="{{$psicosocial->LinkedObs}}" class="form-control" >
				</td>
			</tr>
				<tr>
				<th class="color posicion">
					Twitter: 
				</th>
				<td>					
					<input type="text" name="TwitterObs" value="{{$psicosocial->TwitterObs}}" class="form-control" >
				</td>
			</tr>
	</table>
</div><br>

<div class="row cuadro2" style="height: 200px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<label class="color">ANEXOS:</label>
			<label> {{$psicosocial->Anexos}}</label>
		</div>
	</div>
</div><br>

<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">Resumen de referencias:</th>
		</thead>
		<tbody>
			<table class="contenido">
				<tr>
					<td>
						<input type="text" name="Resultado" value="{{$psicosocial->Resultado}}" class="form-control" >
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div><br>

<div class="table-responsive cuadro">
	<table class="table">
		<thead>
			<th class="encabezado2">Resultado de certificación:</th>
		</thead>
		<tbody>
			<table class="contenido">
				<tr>
					<td>
						<input type="text" name="Resultado" value="{{$psicosocial->Resultado}}" class="form-control" >
					</td>
				</tr>
			</table>
		</tbody>
	</table>
</div><br>


<div class="row cuadro2">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
		<div >
			<label >Certificado </label>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
		<div class="form-group">
			@if($psicosocial->Certificado=='1')
				<p class="marca">X</p>
			@endif
				<input type="checkbox" value="1" name="Certificado" class="checkbox-inline">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
		<div class="form-group">					
			<label>Certificado con Reservas</label>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
		<div class="form-group ">
			@if($psicosocial->Certificado=='2')
					<p class="marca">X</p>
			@endif
			<input type="checkbox" value="2 con Reservas" name="Certificado" class="checkbox-inline">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
		<div class="form-group">	
			<label>No Certificado</label>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
		<div class="form-group ">
			@if($psicosocial->Certificado=='3')
				<p class="marca">X</p>
			@endif
			<input type="checkbox" value="3" name="Certificado" class="checkbox-inline">
		</div>
	</div>		
</div><br>

<br>
<div>
	<button class="btn btn-primary" type="submit"> Guardar </button>
	<button class="btn btn-danger" type="reset">Cancelar</button>
</div>



</div>
</div>

{!!Form::close()!!}


	
@endsection


				
				