@extends('layouts.empresa')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Encargados</h3>		
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre del Empleado</th>
						<th>Telefono</th>
						<th>Puesto</th>						
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

						</tr>
					@endforeach
				</table>
			</div>
			
			{{$empleado->render()}}
		</div>
	</div>


@endsection