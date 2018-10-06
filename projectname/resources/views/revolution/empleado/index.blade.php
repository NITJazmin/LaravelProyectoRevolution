@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Encargados</h3>		
			@include('revolution.coordinador.search')<!--Pendiente de arreglar -->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre del Encargado</th>
						<th>Telefono</th>
						<th>E-mail</th>
						<th>opciones</th>
					</thead>
					@foreach($empleado as $empl)
						<tr>
							<td>
								{{$empl->Nombre}}
								{{$empl->App}}
								{{$empl->Sapp}}	
							</td>
							<td>{{$empl->Telefono}}</td>
							<td> {{$empl->email}}</td>
						</tr>

					@endforeach
				</table>
			</div>
			
		</div>
	</div>


@endsection