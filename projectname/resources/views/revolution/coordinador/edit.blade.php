@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Editar Coordinador:</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($coordinador,['method'=>'PATCH','route'=>['revolution.coordinador.update',$coordinador->ID_coordinador]]) !!}
			
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" value="{{$coordinador->Nombre}}" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="Papp">Primer apellido</label>
				<input type="text" name="Papp" class="form-control" value="{{$coordinador->Papp}}" placeholder="Primer apellido">
			</div>
			<div class="form-group">
				<label for="Sapp">Segundo apellido</label>
				<input type="text" name="Sapp" class="form-control" value="{{$coordinador->Sapp}}" placeholder="Segundo apellido">
			</div>
			<div class="form-group">
				<label for="Email">E-mail</label>
				<input type="text" name="Email" class="form-control" value="{{$coordinador->Em}}" placeholder="Segundo apellido">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}

		</div>
	</div>

@endsection