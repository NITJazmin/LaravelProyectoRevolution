@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Empresas</h3>		
			@include('revolution.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>ID</th>
						<th>Nombre Comercial</th>
						<th>Giro de la empresa</th>
						<th>Direccion Física</th>
						<th>Telefono</th>
						<th>opciones</th>
					</thead>
					@foreach ($empresa as $emp)
						<tr>
							<td>{{$emp->ID_empresa}} </td>
							<td>{{ $emp->Nombre}}</td>
							<td>{{ $emp->Giro}}</td>
							<td>{{ $emp->Direccion}}</td>
							<td>{{ $emp->Telefono}} </td>
							<td style="text-align: center;">
								<!--<a href="/revolution/empleado"><button type="button" class="btn btn-warning">Encargado(s)</button></a>-->
								<a href="{{URL::action('EmpresaController@edit',$emp->ID_empresa)}}"><button class="btn btn-primary"> Editar </button></a>
								<button type="button" data-target="#modal-delete-{{$emp->ID_empresa}}" data-toggle="modal" class="btn btn-danger">x</button>
							</td>
						</tr>
					@include('revolution.empresa.modal')
					@endforeach
				</table>
			</div>
			<a href="/revolution/empresa/create"><button type="button" class="btn btn-success">Nuevo</button></a>
			{{$empresa->render()}}
		</div>
	</div>


@endsection