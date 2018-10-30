@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Nuevo Coordinador</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif
	
			{!! Form::open(array('url'=>'revolution/coordinador','method'=>'POST','autocomplete'=>'on')) !!}
			
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="Papp">Primer apellido</label>
				<input type="text" name="Papp" class="form-control" placeholder="Primer apellido">
			</div>
			<div class="form-group">
				<label for="Sapp">Segundo apellido</label>
				<input type="text" name="Sapp" class="form-control" placeholder="Segundo apellido">
			</div>
			<div class="form-group">
				<label for="mail">Correo</label>
				<input type="mail" name="mail" class="form-control" placeholder="example@mail.com" required>
			</div>
			<div class="form-group">
				<label for="password">Contraseña</label>
				<input type="password" name="password" class="form-control" minlength="6" maxlength="16" required>
			</div>
			<div class="form-group">
				<label for="password_confir">Confirma contraseña</label>
				<input type="password" name="password_confir" class="form-control" minlength="6" maxlength="16" required>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}

		</div>
	</div>

@endsection