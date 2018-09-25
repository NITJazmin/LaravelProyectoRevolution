@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Coordinadores de Revolution <a href="coordinador/create"><button>Nuevo</button></a></h3>
			@include('revolution.coordinador.search')
		</div>
	</div>

@endsection