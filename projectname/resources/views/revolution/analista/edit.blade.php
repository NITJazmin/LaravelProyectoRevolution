@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Editar Analista</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif
	
			{!! Form::model($analista,['method'=>'PATCH','route'=>['revolution.analista.update',$analista->ID_analista]]) !!}			
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" value="{{$analista->Nombre}}" class="form-control" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="Papp">Primer apellido</label>
				<input type="text" name="PrimerApp" value="{{$analista->Papp}}" class="form-control" placeholder="Primer apellido">
			</div>
			<div class="form-group">
				<label for="Sapp">Segundo apellido</label>
				<input type="text" name="SegundoApp" value="{{$analista->Sapp}}" class="form-control" placeholder="Segundo apellido">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" value="{{$analista->Telefono}}" class="form-control" placeholder="Telefono">
			</div>
			<div class="form-group">
				
				<select name="ID_peticion" value="{{old('ID_peticion')}}" class="form-control"> 
					@foreach ($peticion as $pet)
						<option value="{{$pet->ID_peticion}}">{{$pet->Nombre}}</option>
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