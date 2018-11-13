@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Editar Reclutador</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{$error}} </li>
					@endforeach
				</ul>
			</div>
			@endif
	
			{!! Form::model($reclutador,['method'=>'PATCH','route'=>['revolution.reclutador.update',$reclutador->ID_reclutador]]) !!}			
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" value="{{$reclutador->Nombre}}" class="form-control" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="Papp">Primer apellido</label>
				<input type="text" name="PrimerApp" value="{{$reclutador->Papp}}" class="form-control" placeholder="Primer apellido">
			</div>
			<div class="form-group">
				<label for="Sapp">Segundo apellido</label>
				<input type="text" name="SegundoApp" value="{{$reclutador->Sapp}}" class="form-control" placeholder="Segundo apellido">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" value="{{$reclutador->Telefono}}" class="form-control" placeholder="Telefono">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			<div class="form-group" >
				<input type="hidden" name="procedencia" value="edit" />
			</div>
		
			
			{!!Form::close()!!}

		</div>
	</div>

@endsection