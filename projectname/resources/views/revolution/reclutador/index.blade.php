@extends('layouts.admin')
@section('contenido')	

<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Reclutadores</h3>		
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
					@foreach($reclutador as $recl)
						<tr>	
							<td>
								{{$recl->Nombre}}
								{{$recl->Papp}}
								{{$recl->Sapp}}	
							</td>
							<td>{{$recl->Telefono}}</td>
							<td>
								
					 			<a href="{{URL::action('ReclutadorController@edit',$recl->ID_reclutador)}} "><button class="btn btn-primary"> Editar </button></a>

					 			<button type="button" data-target="#modal-delete-{{$recl->ID_reclutador}}" data-toggle="modal" class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
					@include('revolution.reclutador.modal')
					@endforeach
				</table>
			</div>
			<a href="/revolution/reclutador/create"><button type="button" class="btn btn-success">Nuevo</button></a>
			{{$reclutador->render()}}			
		</div>
	</div>

@endsection