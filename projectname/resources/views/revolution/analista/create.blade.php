@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Nuevo Analista</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif
	
			{!! Form::open(array('url'=>'revolution/analista','method'=>'POST','autocomplete'=>'off')) !!}
			
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" required value="{{old('Nombre')}}" class="form-control" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="Papp">Primer apellido</label>
				<input type="text" name="PrimerApp" value="{{old('Papp')}}" class="form-control" placeholder="Primer apellido">
			</div>
			<div class="form-group">
				<label for="Sapp">Segundo apellido</label>
				<input type="text" name="SegundoApp" value="{{old('Sapp')}}" class="form-control" placeholder="Segundo apellido">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" value="{{old('Telefono')}}" class="form-control" placeholder="Telefono">
			</div>
			<div class="form-group">
				<label for="Email">E-mail</label>
				<input type="text" name="emailEmpresa" value="{{old('emailEmpresa')}}" class="form-control" placeholder="E-mail">
			</div>

			<div class="form-group">
				<label>Coordinador que da de alta pero hay que quitarlo debe ser automatico</label>
				<select name="ID_coordinador" value="{{old('ID_coordinador')}}" class="form-control"> 
					@foreach ($coordinador as $coor)
						<option value="{{$coor->ID_coordinador}}">{{$coor->Nombre}}</option>
					@endforeach	
				</select>
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			
			{!!Form::close()!!}

		</div>
	</div>

@endsection