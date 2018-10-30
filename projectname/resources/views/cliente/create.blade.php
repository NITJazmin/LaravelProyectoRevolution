@extends('layouts.empresa')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Nueva Solicitud</h3>
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
	{!! Form::open(array('action'=>'PeticionController@store','method'=>'POST','autocomplete'=>'off')) !!}
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Nombre">Nombre Peticion</label>
				<input type="text" name="Nombre" required value="{{old('Nombre')}}" class="form-control" placeholder="Nombre...">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="FechaI">Selecciona Fecha de inicio</label>
				<input type="date" name="FechaI"  value="{{old('FechaI')}}" class="form-control" placeholder="DD/MM/AA">
			</div>
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Descripcion">Descripcion</label>
				<textarea name="Descripcion" value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion"></textarea>
			</div>
		</div>		
		

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				
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