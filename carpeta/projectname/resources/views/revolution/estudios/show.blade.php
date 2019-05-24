@extends('layouts.analista')
@section('contenido')
 <link rel="stylesheet" href="{{ asset('css1/estudios.css') }}">


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
							<label class="color" >Nombre:</label> {{$estudio->nombrePostulado}}<br>
							<label class="color">Puesto:</label> {{$estudio->puestoSol}}<br>
							<label class="color">Fecha de solicitud:</label> {{$estudio->fechSol}}<br>
							<label class="color">Fecha de entrega:</label> {{$estudio->fechEntr}}<br>
							<label class="color">Atencion a:</label> {{$estudio->atencion}}<br>
							<label class="color">Region:</label> {{$estudio->region}}
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
							{{$estudio->telefonica}}
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
							{{$estudio->familiar}}
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
							{{$estudio->laboral}}</td>
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
							{{$estudio->psicosocial}}
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
						Deshonestidad 
					</td>
					<td >
						{{$estudio->obsHonestidad}}
					</td>
				</tr>
				<tr>
					<td class="color posicion">
						Adicciones
					</td>
					<td>
						{{$estudio->Obsadic}}
					</td>
				</tr>
					<tr>
					<td class="color posicion">
						Perversion sexual 
					</td>
					<td>
						{{$estudio->Obsperv}}
					</td>
				</tr>
				<tr>
					<td class="color posicion">
						Inestabilidad emocional 
					</td>
					<td >
						{{$estudio->ObsEmo}}
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
					@if($estudio->resultado=='Certificado')
						<p class="marca">X</p>
					@endif
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
			<div class="form-group">					
				<label>Certificado con Reservas</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
			<div class="form-group ">
					@if($estudio->resultado=='Reservas')
						<p class="marca">X</p>
					@endif
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 color posicion2">
			<div class="form-group">	
				<label>No Certificado</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 posicion2">
			<div class="form-group ">
					@if($estudio->resultado=='NoCertificado')
						<p class="marca">X</p>
					@endif
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
					<p>{{$personales->nombre}}</p>
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
					<p> {{$estudio->puestoSol}} </p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
				<div class="form-group">
					<label class="color">Fecha de Evaliación:</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
				<div class="form-group">
					<p> {{$personales->fechEval}} </p>
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
					<p>{{$personales->edad}}</p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
				<div >
					<label class="color">Fecha de nacimiento:</label>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
				<div >
					<p>{{$personales->fechNac}}</p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
				<div >
					<label class="color">Lugar de Nacimiento:</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 linea2">
				<div >
					<p> {{$personales->lugarNac}} </p>
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
					<p>  {{$personales->edoCivil}} </p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
				<div >
					<label class="color">Grado Académico:</label>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
				<div>
					<p>  {{$personales->gradoAcad}} </p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
				<div >
					<label class="color">Teléfono de Casa:</label>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 linea2">
				<div>
					<p>   {{$personales->telCasa}} </p>
				</div>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 linea2">
				<div>
					<label class="color">Vive en casa:</label>
				</div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 linea2">
				<div>
					<p> {{$personales->tipoVivienda}} </p>
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
		<?php } $i=1+$i; ?>	
	</div>
	<div class="cuadro">
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Nombre de la Empresa:</label>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
				<p>{{$refLab->nomEmpresa}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Giro:</label>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
				<p>{{$refLab->giro}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Domicilio:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->domicilio}}</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Colonia:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->colonia}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
				<label class="color">Delegación/Municipio:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->delMun}}</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Telefono:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->telefono}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Último puesto:</label>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
				<p>{{$refLab->ultimoPuesto}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Jefe inmediato:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->jefeInmediato}}</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Puesto:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->puesto}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Fecha de ingreso:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->fechIngreso}}</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Fecha de salida:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->fechSalida}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Sueldo inicial:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->sueldoIni}}</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Sueldo final:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
				<p>{{$refLab->sueldoFinal}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Motivo de salida:</label>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
				<p>{{$refLab->motSalida}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Nombre de responsable de RH:</label>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
				<p>{{$refLab->responsableRH}}</p>
			</div>
		</div>
		<div class="row marco">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label class="color">Comentarios:</label>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 linea2">
				<p>{{$refLab->comentarios}}</p>
			</div>
		</div>	
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
							{{$estudio->resRefLab}}
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
							{{$estudio->mapa}}
						</td>
					</tr>
				</table>
			</tbody>
		</table>
	</div><br>


<!--===============================Modelo Referencas=============================================-->
	<?php $i=1; ?> <!--Contador para cambiar el titutlo de la informacion-->
	@foreach($referencias as $ref)
		<?php if ($i==1){?>
			<!--===================== Inicio Encabezado de Estudio===================================-->
			<div class="cuadro">
				<div class="row  marco">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
						<div class="form-group">
							<label class="color">Nombre del evaluado:</label>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 linea2">
						<div class="form-group">
							<p>{{$personales->nombre}}</p>
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
							<p> {{$estudio->puestoSol}} </p>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
						<div class="form-group">
							<label class="color">Fecha de Evaliación:</label>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
						<div class="form-group">
							<p> {{$personales->fechEval}} </p>
						</div>
					</div>
				</div>	
			</div>
			<!--=========================Fin de encabezado de Estudio========================================-->
			<div class="encabezado2 titulo cuadro ">
				<label>II. Referencias Personales</label>
			</div>	
			<br>
		<?php }if ($i==4){?>
			<!--============================ Inicii Encabezado de Estudio===================================-->
			<div class="cuadro">
				<div class="row  marco">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
						<div class="form-group">
							<label class="color">Nombre del evaluado:</label>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 linea2">
						<div class="form-group">
							<p>{{$personales->nombre}}</p>
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
							<p> {{$estudio->puestoSol}} </p>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
						<div class="form-group">
							<label class="color">Fecha de Evaliación:</label>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
						<div class="form-group">
							<p> {{$personales->fechEval}} </p>
						</div>
					</div>
				</div>	
			</div>
	<!--=========================Fin de encabezado de Estudio========================================-->
		<div class="encabezado2 titulo cuadro ">
			<label>III. Referencias Familiares</label>
		</div>	
		<br>
		<?php $i=1; } ?>
		<div  class="encabezado2 cuadro2">
			<label>Referencia {{$i}}</label>
			<?php $i=$i+1;?>	
		</div>
		<div class="cuadro linea2">
			<div class="row marco">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<label class="color">Nombre:</label>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 linea2">
					<p> {{$ref->nombrePers}} </p>
				</div>
			</div>
			<div class="row marco">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<label class="color">Telefono:</label>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
					<p> {{$ref->telefonoPers}} </p>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<label class="color">Parentesco:</label>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2">
					<p> {{$ref->parentesco}} </p>
				</div>
			</div>
			<div class="row marco">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
					<label class="color">¿Cuánto tiempo tiene de conocerlo?:</label>
					<p> {{$ref->tmpConocer}} </p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
					<label class="color">¿Qué opinión tiene de él?:</label>
					<p> {{$ref->opinion}} </p>
				</div>
			</div>
			<div class="row marco">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
					<label class="color">¿Lo recomendaría para laborar con nosotros?:</label>
					<p> {{$ref->recomienda}} </p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<label class="color">Observaciones:</label>
					<p> {{$ref->observacion}} </p>
				</div>
			</div>
		</div>
	@endforeach
<!--=====================================Encabezado de estudio===================================-->

	<div class="titulo">
		<label>Cliente:</label><br>
		<label> {{$empleado->Nombre}} {{$empleado->Papp}} {{$empleado->Sapp}} </label>
	</div><br>

	<div class="cuadro">
		<div class="row  marco">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
				<div class="form-group">
					<label class="color">Nombre del evaluado:</label>
				</div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 linea2">
				<div class="form-group">
					<p>{{$personales->nombre}}</p>
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
					<p> {{$estudio->puestoSol}} </p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
				<div class="form-group">
					<label class="color">Región:</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
				<div class="form-group">
					<p> {{$estudio->region}} </p>
				</div>
			</div>
		</div>	
		<div class="row marco">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
				<div class="form-group">
					<label class="color">Fecha Solicitado:</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
				<div class="form-group">
					<p> {{$estudio->fechSol}} </p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 linea2">
				<div class="form-group">
					<label class="color">Fecha de Entrega:</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 linea2">
				<div class="form-group">
					<p> {{$estudio->fechEntr}} </p>
				</div>
			</div>
		</div>	
	</div>
	<!--=============================Fin de encabezado de estudio====================================-->
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
						{{$psicosocial->FacebookObs}}
					</td>
				</tr>
				<tr>
					<th class="color posicion">
						Linkedin:
					</th>
					<td>
						{{$psicosocial->LinkedObs}}
					</td>
				</tr>
					<tr>
					<th class="color posicion">
						Twitter: 
					</th>
					<td>
						{{$psicosocial->TwitterObs}}
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
							{{$psicosocial->Resultado}}
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
							{{$psicosocial->Resultado}}
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
			</div>
		</div>		
	</div>



	<br>
	<div>
		<a href="{{URL::action('EstudiosController@show',[$estudio->ID_peticion,'procedencia'=>$procedencia='show'])}}"><button class="btn btn-primary"> Editar </button></a>
		<button class="btn btn-danger" type="reset">Cancelar</button>
	</div>



	</div>
</div>

{!!Form::close()!!}


	
@endsection


				
				