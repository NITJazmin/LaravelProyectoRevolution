@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Editar Empleado</h3>
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
		{!! Form::model($empleado,['method'=>'PATCH','route'=>['revolution.empleado.update',$empleado->ID_empleado]]) !!}	
			
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Nombre">Nombre del Encargado</label>
				<input type="text" name="Nombre" value="{{$empleado->Nombre}}" class="form-control" placeholder="Nombre...">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Papp">Apellido Paterno</label>
				<input type="text" name="Papp"  value="{{$empleado->Papp}}" class="form-control" placeholder="Primer Apellido">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Sapp">Segundo Apellido</label>
				<input type="text" name="Sapp"  value="{{$empleado->Sapp}}" class="form-control" placeholder="Segundo Apellido">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" value="{{$empleado->Telefono}}" class="form-control" placeholder="Telefono">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" value="{{$empleado->email}}" class="form-control" placeholder="email">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="puesto">Puesto</label>
				<input type="text" name="puesto" value="{{$empleado->puesto}}" class="form-control" placeholder="puesto">
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