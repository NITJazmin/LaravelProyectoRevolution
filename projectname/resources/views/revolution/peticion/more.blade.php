@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
			<form class="group">
				<h3>peticion Tipo {{$peticion->ID_peticion}} {{$peticion->Nombre}}</h3>	
			</form>	
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<form class="group">
				<h3>Solicitado por  {{$empleado}} {{$Papp}} </h3>	
			</form>	
		</div>
	</div>
	<br><br>
	
	{!! Form::model($peticion,['method'=>'PATCH','route'=>['revolution.peticion.update',$peticion->ID_peticion]]) !!}
	<div class="row" >
		<div class="col-lg-2 col-md-2 col-sm-2"></div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="margin: auto;">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Descripción</th>
						<th>Status</th>	
						<th>Archivo</th>
						<th>Encargado Revolution</th>										
					</thead>
					<tbody>
						<tr>	
							<td>
								{{$peticion->Descripcion}}	
							</td>
							<td>{{$peticion->Status}}</td>
							<td>Va el archivo</td>
							<td>
								@if($peticion->Nombre=="ESE")
									<select name="ID_analista" class="form-control"> 
									@foreach ($analista as $an)
											<option value="{{$an->ID_analista}}">{{$an->Nombre}} {{$an->Papp}} </option>
										@endforeach	
									</select>
								@else
									<select name="ID_reclutador" class="form-control"> 
									@foreach ($reclutador as $recl)
											<option value="{{$recl->ID_reclutador}}">{{$recl->Nombre}} {{$recl->Papp}} </option>
										@endforeach	
									</select>
								@endif
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div style="text-align: left;">
				<button class="btn btn-primary">Aceptar</button>
			</div>
		</div>
	</div>

@endsection