@extends('layouts.reclutador')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Solicitudes </h3>		
			
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Tipo</th>
						<th>Fecha de Solicitud</th>
						<th>Fecha de fin</th>			
						<th>Solicitante</th>	
						<th>Descripcion</th>						
						<th>Status</th>	
						<th>Opciones</th>						
					</thead>
					@foreach($solicitud as $sol)
						<tr>	
							<td>
								{{$sol->Nombre}}	
							</td>
							<td>{{$sol->FechaIni}}</td>
							<td>{{$sol->FechaFin}}</td>
							<td>{{$sol->empleado}}
								{{$sol->Papp}}
								{{$sol->Sapp}}
							</td>
							<td>{{$sol->Descripcion}}
							</td>
							<td>{{$sol->Status}}</td>
							<td>
								<a href="{{URL::action('PerfiladorController@create',['id'=>$sol->ID_peticion])}}">
								<button class="btn btn-success">Empezar</button></a>
								<a href="{{URL::action('PerfiladorController@show',['id'=>$sol->ID_peticion])}}">
								 <button class="btn btn-primary">Ver proceso</button></a>
							</td>
							
						</tr>
					
					@include('revolution.peticion.modal')
					@endforeach
				</table>
			</div>

		</div>
	</div>


@endsection