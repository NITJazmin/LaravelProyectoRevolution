@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Coordinadores de Revolution</h3>		
			@include('revolution.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th> 	
						<th>opciones</th>
					</thead>
					@foreach ($coordinador as $coor)
						<tr>
							<td>{{ $coor->Nombre}}
								{{ $coor->Papp}} 
								{{ $coor->Sapp}} 
							<td>
								<a href="{{URL::action('CoordinadorRevController@edit',$coor->ID_coordinador)}} "><button class="btn btn-primary">Editar</button></a>
								<button type="button" data-target="#modal-delete-{{$coor->ID_coordinador}}" data-toggle="modal" class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
					@include('revolution.coordinador.modal')
					@endforeach
				</table>
			</div>
			<a href="/revolution/coordinador/create"><button type="button" class="btn btn-success">Nuevo</button></a>
			{{$coordinador->render()}}
			
		</div>
	</div>


@endsection