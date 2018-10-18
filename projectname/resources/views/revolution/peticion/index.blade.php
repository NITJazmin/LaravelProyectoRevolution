@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Solicitudes</h3>		
			@include('revolution.search')<!---->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Tipo</th>
						<th>Fecha de inicio</th>
						<th>Fecha de fin</th>
						<th>Status</th>
						<th>Descripxion</th>						
						<th>Solicitante</th>						
						<th>Agente Rev</th>	
						<th>opciones</th>						
					</thead>
					@foreach($solicitud as $sol)
						<tr>	
							<td>
								{{$sol->Nombre}}	
							</td>
							<td>{{$sol->FechaIni}}</td>
							<td>{{$sol->FechaFin}}</td>
							<td>{{$sol->Status}}</td>
							<td>{{$sol->Descripcion}}</td>
							<td>{{$sol->empleado}}
								{{$sol->Papp}}
								{{$sol->Sapp}}
							</td>
							<td>{{$sol->coordinador}}
								{{$sol->apellido}}

							</td>
							<td>
					 			

								<button type="button" class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			<a href="/revolution/empleado/create"><button type="button" class="btn btn-success">Nuevo</button></a>
		</div>
	</div>


@endsection