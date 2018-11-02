@extends('layouts.admin')
@section('contenido')

<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
			<h3 style="font-size:20px;">Inicio de Coordinador de Revolution</h3>
		</div>
		
</div>		

<div class="row">
	<div class="col-lg-12">
		<div style="text-align: center; font-size: 29px;">
			<h2>Bienvenido</h2>
			<label>
				{{$datos->Nombre}}
				{{$datos->Papp}}
				{{$datos->Sapp}}
			</label>
		</div>
	</div>	
</div><br><br>

<div class="row" style="margin: auto; ">
	<div class="col-md-2 col-md-offset-2" style="padding: 0;">
		<div class="box" style=" border: 2.3px #35388D solid; border-width: 2.5px 0.5px 2.5px 2.5px;">
			<div class="box-header with-border" >
				<label>Datos Personales</label>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12ss">
							<label>hola</label>
						</div>
					</div>
				</div>
			</div>	
		</div>
		
	</div>
	<div class="col-md-6" style="padding: 0; ">
		<div class="box" style=" border: 2.3px #35388D solid; border-width: 2.5px 2.5px 2.5px 0.4px;">
			<div class="box-header with-border">
				<label>Datos Personales</label>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12ss">
							<label>hola</label>
						</div>
					</div>
				</div>
			</div>	
		</div>
		
	</div>	
</div>

@endsection