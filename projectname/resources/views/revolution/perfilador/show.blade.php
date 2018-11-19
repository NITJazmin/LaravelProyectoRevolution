@extends('layouts.reclutador')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Perfilador</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
		</div>
	</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Datos del Contacto</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered table-condensed table-hover">
						<tr>
							<td style="width: 25%;"><label>Razon Social:</label></td>
							<td> {{$contacto->razonSocial}}</td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Nombre comercial de la Empresa:</label></td>
							<td> {{$contacto->nombre}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Giro de la Empresa:</label></td>
							<td> {{$contacto->giro}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Tamaño de la Empresa:</label></td>
							<td> {{$contacto->tamano}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Dirección Física:</label></td>
							<td> {{$contacto->direccion}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Nombre del Contacto:</label></td>
							<td> {{$contacto->contacto}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Puesto del Contacto:</label></td>
							<td> {{$contacto->cargo}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Telefonos del Contacto:</label></td>
							<td> {{$contacto->telefono}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Email del Contacto:</label></td>
							<td>{{$contacto->email}} </td> 
						</tr> 
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Características del Puesto</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered table-condensed table-hover" >
						<tr>
							<td style="width: 25%;"><label>Nombre del puesto a cubrir:</label></td>
							<td> {{$carac->puesto}}</td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Número de posiciones a reclutar:</label></td>
							<td> {{$carac->cantidad}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Objetivos del Puesto:</label></td>
							<td>{{$carac->objetivo}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Actividades del Puesto:</label></td>
							<td>{{$carac->actividades}}</td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>¿A qué puesto reportará?:</label></td>
							<td> {{$carac->reporte}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Días de trabajo:</label></td>
							<td> {{$carac->diasLab}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Horario Laboral:</label></td>
							<td> {{$carac->horario}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Luegar de trabajo:</label></td>
							<td> {{$carac->lugar}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Rango de Edad:</label></td>
							<td> {{$carac->rangoEdad}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Sexo:</label></td>
							<td> {{$carac->sexo}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Estado Civil:</label></td>
							<td> {{$carac->estadoCivil}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>¿Tendrá Gente a su cargo?:</label></td>
							<td> {{$carac->genteCargo}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>¿Con qué actores internos de la compañía se relaciona?:</label></td>
							<td> {{$carac->actoresInternos}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>¿Con qué actores externos de la compañía se relaciona?:</label></td>
							<td> {{$carac->actoresExternos}} </td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Educacion, Competencias y Habilidades</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered table-condensed table-hover">
						<tr>
							<td style="width: 25%;"><label>Escolaridad:</label></td>
							<td> {{$educa->escolaridad}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Conocimientos requeridos:</label></td>
							<td>{{$educa->conocimientos}}</td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Experiencia requerida:</label></td>
							<td> {{$educa->experiencia}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Competencias requeridas:</label></td>
							<td> {{$educa->competencias}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Habilidades requeridas:</label></td>
							<td> {{$educa->habilidades}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>% de paquetería Office:</label></td>
							<td> {{$educa->office}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>¿Para qué función(es) lo(s) utiliza:</label></td>
							<td> {{$educa->funcionesOffice}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>% de paquetería de software adicionales:</label></td>
							<td> {{$educa->adicional}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>¿Para qué función(es) lo(s) utiliza?:</label></td>
							<td> {{$educa->funcionesAdicional}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Herramientas, maquinaria o equipo a utilizar:</label></td>
							<td>{{$educa->herramientas}}</td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Idiomas adicionales:</label></td>
							<td>{{$educa->idiomas}}</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Sueldo y Prestaciones</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered table-condensed table-hover">
						<tr>
							<td style="width: 25%;"><label>Sueldo Mensual:</label></td>
							<td> {{$prest->sueldo}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Periodo de Pago:</label></td>
							<td> {{$prest->pago}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Prestaciones:</label></td>
							<td> {{$prest->prestaciones}} </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>% de Comisiones por venta:</label></td>
							<td> {{$prest->comisiones}}  </td>
						</tr>
						<tr>
							<td style="width: 25%;"><label>Métrica de ventas mensuales:</label></td>
							<td> {{$prest->metricas}} </td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Proceso de Reclutamiento</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered table-condensed table-hover">
						<tr>
							<td style="width: 30%;"><label>Número de entrevistas con el cliente:</label></td>
							<td> {{$reclu->entrevistas}} </td>
						</tr>
						<tr>
							<td style="width: 30%;"><label>¿Quíen(es) entrevista(n)?:</label></td>
							<td> {{$reclu->entrevistador}} </td>
						</tr>
						<tr>
							<td style="width: 30%;"><label>Entrevistador Sustituto:</label></td>
							<td>{{$reclu->sustituto}}</td>
						</tr>
						<tr>
							<td style="width: 30%;"><label>¿Aplican alguna prueba psicométrica?:</label></td>
							<td>{{$reclu->psicometrico}}</td>
						</tr>
						<tr>
							<td style="width: 30%;"><label>¿Aplican algún estudio socioeconomico, médico o de otro tipo? :</label></td>
							<td>{{$reclu->ese}}</td>
						</tr>
						<tr>
							<td style="width: 30%;"><label><label>Durante la entrevista ¿Qué particularidad es importante observar?:</label></td>
							<td> {{$reclu->particularidad}} </td>
						</tr>
						<tr>
							<td style="width: 30%;"><label><label>Fecha máxima para cubrir la vacante:</label></td>
							<td> {{$reclu->fechMax}} </td>
						</tr>
						<tr>
							<td style="width: 30%;"><label>Motivos potenciales de posible recahzo del candidato:</label></td>
							<td> {{$reclu->rechazo}} </td>
						</tr>
						<tr>
							<td style="width: 30%;"><label>Comentarios adicionales:</label></td>
							<td> {{$reclu->comentarios}} </td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>


		<div class="form-group">
				<a href="{{URL::action('PerfiladorController@show',[$contacto->ID_peticion,'procedencia'=>$procedencia='show'])}}"><button class="btn btn-primary"> Editar </button></a>
				
				<a href="{{URL::action('PerfiladorController@show',[$contacto->ID_peticion,'procedencia'=>$procedencia='sol_pdf'])}}">
				<button class="btn btn-warning" type="reset">PDF</button></a>
		</div>
	</div>
</div>



	
@endsection
