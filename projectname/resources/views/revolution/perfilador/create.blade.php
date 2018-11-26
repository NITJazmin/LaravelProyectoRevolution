@extends('layouts.reclutador')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
			<h3>Perfilador</h3>
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
	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
		</div>
	</div>
{!! Form::open(	array('url'=>'revolution/perfilador','method'=>'POST','autocomplete'=>'off')) !!}

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Datos del Contacto</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Razon Social:</td>
							<td><input type="text" name="razonSocial" class="form-control" placeholder="(Como aparece en su RFC)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Nombre comercial de la Empresa:</td>
							<td><input type="text" name="nombre" class="form-control" placeholder="(Como se le conoce en el mercado)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Giro de la Empresa:</td>
							<td><input type="text" name="giro" class="form-control" placeholder="(Agropecuaria, servicios, comercio, construcción, etc.)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Tamaño de la Empresa:</td>
							<td><input type="text" name="tamano" class="form-control" placeholder="(CMicro, Pequeña, Mediana, Grande)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Dirección Física:</td>
							<td><input type="text" name="direccion" class="form-control" placeholder="(Donde s ubica la empresa)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Nombre del Contacto:</td>
							<td><input type="text" name="contacto" class="form-control" placeholder="(Quien dará seguimiento al proceso)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Puesto del Contacto:</td>
							<td><input type="text" name="cargo" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Telefonos del Contacto:</td>
							<td><input type="text" name="telefono" class="form-control" placeholder="(55-1249172)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Email del Contacto:</td>
							<td><input type="text" name="email" class="form-control" placeholder="(contacto@correo.com)">
							<input type="hidden" name="ID_peticion" value="{{$id}}">
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Características del Puesto</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre del puesto a cubrir:</td>
							<td><input type="text" name="puesto" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Número de posiciones a reclutar:</td>
							<td><input type="text" name="cantidad" class="form-control" placeholder="(Del mismo puesto[1,2,3...])"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Objetivos del Puesto:</td>
							<td><input type="text" name="objetivo" class="form-control" placeholder="(Definir)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Actividades del Puesto:</td>
							<td><input type="text" name="actividades" class="form-control" placeholder="(Definir)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿A qué puesto reportará?:</td>
							<td><input type="text" name="reporte" class="form-control" placeholder="(Gerente comercia, líder de proyecto, director general, etc.)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Días de trabajo:</td>
							<td><input type="text" name="diasLab" class="form-control" placeholder="(GMínimo con un día de descanso a la semana)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Horario Laboral:</td>
							<td><input type="text" name="horario" class="form-control" placeholder="(No mayor a ocho horas diarias)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Luegar de trabajo:</td>
							<td><input type="text" name="luegar" class="form-control" placeholder="(Oficina, industria, comercio, etc.)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Rango de Edad:</td>
							<td><input type="text" name="rangoEdad" class="form-control")></td>
						</tr>
						<tr>
							<td style="width: 25%;">Sexo:</td>
							<td><input type="text" name="sexo" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Estado Civil:</td>
							<td><input type="text" name="estadoCivil" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Tendrá Gente a su cargo?:</td>
							<td><input type="text" name="genteCargo" class="form-control" placeholder="(Especificar número y posiciones de subordinados)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Con qué actores internos de la compañía se relaciona?:</td>
							<td><input type="text" name="actoresInternos" class="form-control" placeholder="(Director, etc.)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Con qué actores externos de la compañía se relaciona?:</td>
							<td><input type="text" name="actoresExternos" class="form-control" placeholder="(Clientes, proveedores.)"></td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Educacion, Competencias y Habilidades</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Escolaridad:</td>
							<td><input type="text" name="escolaridad" class="form-control" placeholder="(Secundaria, bachillerato, técnica, etc.)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Conocimientos requeridos:</td>
							<td><input type="text" name="conocimientos" class="form-control" placeholder="(Escpecificar)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Experiencia requerida:</td>
							<td><input type="text" name="experiencia" class="form-control" placeholder="(Especificar puesto o nivel: en años)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Competencias requeridas:</td>
							<td><input type="text" name="competencias" class="form-control" placeholder="(Liderazgo, trabajo en equipo, iniciativa, etc.)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Habilidades requeridas:</td>
							<td><input type="text" name="habilidades" class="form-control" placeholder="(Facilidad de palabra, atención a clientes, etc)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">% de paquetería Office:</td>
							<td><input type="text" name="office" class="form-control" placeholder="(Word, Excel, PowerPoint, etc.)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Para qué función(es) lo(s) utiliza:</td>
							<td><input type="text" name="funcionesOffice" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">% de paquetería de software adicionales:</td>
							<td><input type="text" name="adicional" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Para qué función(es) lo(s) utiliza?:</td>
							<td><input type="text" name="funcionesAdicional" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Herramientas, maquinaria o equipo a utilizar:</td>
							<td><input type="text" name="herramientas" class="form-control" placeholder="(Describir)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Idiomas adicionales:</td>
							<td><input type="text" name="idiomas" class="form-control" placeholder="Especificar idioma"></td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Sueldo y Prestaciones</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Sueldo Mensual:</td>
							<td><input type="text" name="sueldo" class="form-control" placeholder="(En pesos mexicanos)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Periodo de Pago:</td>
							<td><input type="text" name="pago" class="form-control" placeholder="(Diario, semana, quincenal, mensual)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Prestaciones:</td>
							<td><input type="text" name="prestaciones" class="form-control" placeholder="(sin prestaciones, de ley o superiores)"></td>
						</tr>
						<tr>
							<td style="width: 25%;">% de Comisiones por venta:</td>
							<td><input type="text" name="comisiones" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Métrica de ventas mensuales:</td>
							<td><input type="text" name="metricas" class="form-control" placeholder="(Objetivos de venta)"></td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Proceso de Reclutamiento</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 30%;">Número de entrevistas con el cliente:</td>
							<td><input type="text" name="entrevistas" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 30%;">¿Quíen(es) entrevista(n)?:</td>
							<td><input type="text" name="entrevistador" class="form-control" placeholder="(Nombre/posición)"></td>
						</tr>
						<tr>
							<td style="width: 30%;">Entrevistador Sustituto:</td>
							<td><input type="text" name="sustituto" class="form-control" placeholder="(Nmbre/posicion) En caso de ausencia del entrevistador"></td>
						</tr>
						<tr>
							<td style="width: 30%;">¿Aplican alguna prueba psicométrica?:</td>
							<td><input type="text" name="psicometrico" class="form-control" placeholder="(Especificar)"></td>
						</tr>
						<tr>
							<td style="width: 30%;">¿Aplican algún estudio socioeconomico, médico o de otro tipo? :</td>
							<td><input type="text" name="ese" class="form-control" placeholder="(Especificar)"></td>
						</tr>
						<tr>
							<td style="width: 30%;">Durante la entrevista ¿Qué particularidad es importante observar?:</td>
							<td><input type="text" name="particularidad" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 30%;">Fecha máxima para cubrir la vacante:</td>
							<td><input type="text" name="fechMax" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 30%;">Motivos potenciales de posible recahzo del candidato:</td>
							<td><input type="text" name="rechazo" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 30%;">Comentarios adicionales:</td>
							<td><input type="text" name="comentarios" class="form-control" placeholder="Observaciones"></td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>


		<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
	</div>
</div>

{!!Form::close()!!}

	
@endsection
