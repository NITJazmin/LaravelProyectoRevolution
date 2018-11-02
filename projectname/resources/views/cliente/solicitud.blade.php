@extends('layouts.empresa')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Solicitudes Enviadas</h3>		
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Tipo</th>
						<th>Fecha de inicio</th>
						<th>Status</th>
						<th>Descripción</th>						
						<th>Agente Rev</th>							
					</thead>
					@foreach($solicitud as $sol)
						<tr>	
							<td>
								{{$sol->Nombre}}	
							</td>
							<td>{{$sol->FechaIni}}</td>
							<td>{{$sol->Status}}</td>
							<td>{{$sol->Descripcion}}</td>
							<td>{{$sol->coordinador}}
								{{$sol->Papp}}

							</td>
						</tr>
					
					@endforeach
				</table>
			</div>

		</div>
	</div>


@endsection