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
		</div>
	</div>

			{!! Form::model($coordinador,['method'=>'PATCH','route'=>['revolution.coordinador.update',$coordinador->ID_coordinador],'files'=>'true']) !!}

	<div class="row" style="text-align: right;">
		
	</div><br>
			
	<div class="row">

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" value="{{$coordinador->Nombre}}" placeholder="Nombre...">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Papp">Primer apellido</label>
				<input type="text" name="Papp" class="form-control" value="{{$coordinador->Papp}}" placeholder="Primer apellido">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="Sapp">Segundo apellido</label>
				<input type="text" name="Sapp" class="form-control" value="{{$coordinador->Sapp}}" placeholder="Segundo apellido">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Imagen</label>
				<input type="file" name="foto" class="form-control">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<a href="/revolution/coordinador/">
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
			<div class="form-group" >
				@if (($coordinador->foto)!="")
					<img src="{{asset('imagenes/'.$coordinador->foto)}}" style="height: 150px; width: 180px;">
				@endif
			</div>
		</div>
				
	</div>
			
{!!Form::close()!!}


@endsection