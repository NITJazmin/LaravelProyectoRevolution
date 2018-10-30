@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Nueva Empresa</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif

		{!! Form::open(array('url'=>'revolution/empresa','method'=>'POST','autocomplete'=>'off')) !!}
			
			<div class="form-group">
				<label for="Nombre">Nombre de la Empresa</label>
				<input type="text" name="Nombre" class="form-control" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="Giro">Giro de la Empresa</label>
				<input type="text" name="Giro" class="form-control" placeholder="Giro">
			</div>
			<div class="form-group">
				<label for="Direccion">Dirección Física</label>
				<input type="text" name="Direccion" class="form-control" placeholder="Dirección">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" placeholder="Telefono">
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