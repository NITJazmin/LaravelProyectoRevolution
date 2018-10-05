@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Editar Empresa:</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($empresa,['method'=>'PATCH','route'=>['revolution.empresa.update',$empresa->ID_empresa]]) !!}
			
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" value="{{$empresa->Nombre}}" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="Giro">Giro de la Empresa</label>
				<input type="text" name="Giro" class="form-control" value="{{$empresa->Giro}}" placeholder="Giro">
			</div>
			<div class="form-group">
				<label for="Direccion">Direccion Física</label>
				<input type="text" name="Direccion" class="form-control" value="{{$empresa->Direccion}}" placeholder="Direccion">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" value="{{$empresa->Telefono}}" placeholder="Telefono">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<a href="/revolution/empresa/">
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</a>
			</div>
			{!!Form::close()!!}

		</div>
	</div>

@endsection