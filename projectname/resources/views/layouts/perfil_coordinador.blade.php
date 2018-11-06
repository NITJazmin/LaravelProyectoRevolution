@extends('layouts.admin')

@section('contenido')

<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
			<h3 style="font-size:20px;">Inicio de Coordinador de Revolution</h3>
		</div>
		
</div>		

<div class="row">
	<div class="col-lg-6">
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


<div class="row">
	<div class="col-lg-6">
		<div class="table-responsive">
			<table class="table table-bordered"   style="margin: auto; text-align: center;">
				<thead style="color: #fff; background-color: #35388D" >
					<th>Datos Personales</th>						
				</thead>
				<tbody>
					<table class="table "   style="margin: auto; ">
						<tr>
							<td height="150" style="text-align: center;"><br>
								<img src="{{asset($datos->foto)}}" style="height: 70%;">
							</td>
							<td style="text-align: justify;"><br><br>
								<label>Nombre:</label> {{$datos->Nombre}} {{$datos->Papp}} {{$datos->Sapp}}<br>
                        		<label>e-mail:</label> {{ auth()->user()->email }} <br>
                        		<label>Telefono: </label> {{$datos->telefono}}
                        		<tr>
                        			<td></td>
                        			<td style="text-align: right;">
                        				<button class="btn btn-primary">Editar</button>
                        			</td>
                        		</tr>
                        	</td>
						</tr>
					</table>
				</tbody>
					
				
			</table>
	</div>
</div>

@endsection