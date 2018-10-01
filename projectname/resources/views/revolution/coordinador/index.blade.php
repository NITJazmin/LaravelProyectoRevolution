@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Coordinadores de Revolution</h3>		
			@include('revolution.coordinador.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>ID_Coordinador</th>
						<th>Nombre</th>
						<th>e-mail</th>
						<th>opciones</th>
					</thead>
					@foreach ($coordinador as $coor)
						<tr>
							<td>{{ $coor->ID_coordinador}} </td>
							<td>{{ $coor->Nombre}}
								{{ $coor->Papp}} 
								{{ $coor->Sapp}} 
							<td>{{ $coor->email}} </td>
							<td>
								<a href=" "><button class="btn btn-primary">Editar</button></a>
								<a href="coordinador/drop"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			<a href="coordinador/create"><button type="button" class="btn btn-success">Nuevo</button></a>
			{{$coordinador->render()}}
			
		</div>
	</div>


@endsection