@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Empresas</h3>		
			@include('revolution.coordinador.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>ID_empresa</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>opciones</th>
					</thead>
					@foreach ($empresa as $emp)
						<tr>
							<td>{{ $emp->ID_empresa}} </td>
							<td>{{ $emp->Nombre}}
							<td>{{ $emp->Telefono}} </td>
							<td>
								<a href=""><button class="btn btn-primary">Editar</button></a>
								<a href=""><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			<a href="/revolution/empresa/create"><button type="button" class="btn btn-success">Nuevo</button></a>
			
			
		</div>
	</div>


@endsection