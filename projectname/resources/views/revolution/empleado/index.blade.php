@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Encargados</h3>		
			@include('revolution.search')<!---->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre del Encargado</th>
						<th>Telefono</th>
						<th>Puesto</th>
						<th>Empresa</th>
						<th>opciones</th>						
					</thead>
					@foreach($empleado as $empl)
						<tr>	
							<td>
								{{$empl->Nombre}}
								{{$empl->Papp}}
								{{$empl->Sapp}}	
							</td>
							<td>{{$empl->Telefono}}</td>
							<td>{{$empl->puesto}}</td>
							<td> {{$empl->empresa}}</td>
							<td>
					 			
								<a href="{{URL::action('EmpleadoController@edit',$empl->ID_empleado)}} "><button class="btn btn-primary"> Editar </button></a>
								<button type="button" data-target="#modal-delete-{{$empl->ID_empleado}}" data-toggle="modal" class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			<a href="/revolution/empleado/create"><button type="button" class="btn btn-success">Nuevo</button></a>
			{{$empleado->render()}}
		</div>
	</div>


@endsection