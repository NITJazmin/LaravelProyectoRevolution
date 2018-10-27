@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Analistas</h3>		
			@include('revolution.search')<!---->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>opciones</th>						
					</thead>
					@foreach($analista as $an)
						<tr>	
							<td>
								{{$an->Nombre}}
								{{$an->Papp}}
								{{$an->Sapp}}	
							</td>
							<td>{{$an->Telefono}}</td>
							<td>
								
					 			<a href="{{URL::action('AnalistaController@edit',$an->ID_analista)}} "><button class="btn btn-primary"> Editar </button></a>

								<button type="button" data-target="#modal-delete-{{$an->ID_analista}}" data-toggle="modal" class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
					@include('revolution.analista.modal')
					@endforeach
				</table>
			</div>
			<a href="/revolution/analista/create"><button type="button" class="btn btn-success">Nuevo</button></a>
			{{$analista->render()}}			
		</div>
	</div>


@endsection