@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Nuevo Empleado</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>		
			{!! Form::open(array('url'=>'revolution/empleado','method'=>'POST','autocomplete'=>'off')) !!}
			
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Nombre">Nombre del Encargado</label>
				<input type="text" name="Nombre" required value="{{old('Nombre')}}" class="form-control" placeholder="Nombre...">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Papp">Apellido Paterno</label>
				<input type="text" name="Papp"  value="{{old('Papp')}}" class="form-control" placeholder="Primer Apellido">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Sapp">Segundo Apellido</label>
				<input type="text" name="Sapp"  value="{{old('Sapp')}}" class="form-control" placeholder="Segundo Apellido">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" value="{{old('Telefono')}}" class="form-control" placeholder="Telefono">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" required value="{{old('email')}}"class="form-control" placeholder="email">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="puesto">Puesto</label>
				<input type="text" name="puesto" required value="{{old('Puesto')}}"class="form-control" placeholder="Puesto">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Empresa</label>
				<select name="ID_empresa" class="form-control"> 
					@foreach ($empresa as $emp)
						<option value="{{$emp->ID_empresa}}">{{$emp->Nombre}}</option>
					@endforeach	
				</select>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary">Aceptar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>			
			{!!Form::close()!!}
@endsection