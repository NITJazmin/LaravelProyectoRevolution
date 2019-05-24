@extends('layouts.analista')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
		</div>
	</div>
{!! Form::open(array('url'=>'revolution/estudios','method'=>'POST','autocomplete'=>'off','files'=>'true')) !!}

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="form-group" >
				<img src="{{asset('imagenes/fondo.png')}}" style="height: 45%; width: 45%; padding-left: 20%;">
				<input type="file" name="foto" class="form-control" placeholder="Foto del aspirante">
			</div>
		</div>
	</div>

<br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<!--===============================================================================Formulario del modelo EstudioSocioE -->	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>RESULTADO DE INVESTIGACION SOCIOECONOMICA Y PSICOLOGICA REALIZADA A:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombrePostulado" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Puesto:</td>
							<td><input type="text" name="puestoSol" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de solicitud:</td>
							<td><input type="date" name="fechSol" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de entrega:</td>
							<td><input type="date" name="fechEntr" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Atencion a:</td>
							<td><input type="text" name="atencion" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Region:</td>
							<td><input type="text" name="region" class="form-control">
								<input type="hidden" name="ID_peticion" value="{{$id}}">
							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Resumen investigacion telefonica:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td>
								<textarea name="telefonica" class="form-control" rows="7" cols="60"></textarea>
							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Resumen investigacion familiar:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td>
								<textarea name="familiar" class="form-control" rows="7" cols="60"></textarea>
							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Resumen investigacion laboral:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td>
								<textarea name="laboral" class="form-control" rows="7" cols="60"></textarea>
							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Resumen investigacion psicosocial:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td>
								<textarea name="psicosocial" class="form-control" rows="7" cols="60"></textarea>
							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>
		
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Existen factores de riesgo: (Marque si se encontro algun factor de riesgo para considerar por el cliente)</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th  style="padding-left: 10px;">Factor Riesgo</th>
							<th  style="padding-left: 10px;">Observaciones</th>
						</thead>
						<tr>
							<td style="padding-left: 10px; width: 30%;">
								Deshonestidad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="deshonestidad" name="deshonestidad" class="checkbox-inline">
							</td>
							<td style="padding-right:90px;">
								<input type="text" name="Obshonestidad" class="form-control">
							</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">
								Adicciones &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="adicciones" name="adicciones" class="checkbox-inline">
							</td>
							<td style="padding-right:90px;">
								<input type="text" name="Obsadic" class="form-control">
							</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">
								Perversion sexual &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" value="perversion" name="perversion" class="checkbox-inline">
							</td>
							<td style="padding-right:90px;">
								<input type="text" name="Obsperv" class="form-control">
							</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">
								Inestabilidad emocional &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="inestabilidadEmo" name="inestabilidadEmoci" class="checkbox-inline">
							</td>
							<td style="padding-right:90px;">
								<input type="text" name="ObsEmo" class="form-control">
							</td>
						</tr>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center; border: solid #f4f4f4; ">
				<tr>
					<td><label>Certificado
						<input type="checkbox" value="Certificado" name="resultado" class="checkbox-inline"></label></td>
					<td><label>Certificado con Reservas
						<input type="checkbox" value="Certificado con Reservas" name="resultado" class="checkbox-inline"></label></td>
					<td><label>No Certificado
						<input type="checkbox" value="NoCertificado" name="resultado" class="checkbox-inline"></label></td>
				</tr>
			</table>		
		</div>

	<!--===============================Formulario del modelo DatosPersonales=============================== -->
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Datos generales</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombre" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha Evaluacion:</td>
							<td><input type="date" name="fechEval" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Edad:</td>
							<td><input type="text" name="edad" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de nacimiento:</td>
							<td><input type="date" name="fechNac" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Lugar de Nacimiento:</td>
							<td><input type="text" name="lugarNac" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Estado Civil:</td>
							<td><input type="text" name="edoCivil" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Grado Académico:</td>
							<td><input type="text" name="gradoAcad" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Teléfono de Casa:</td>
							<td><input type="text" name="telCasa" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Vive en casa:</td>
						</tr>
						<tr>
							<td style="width: 25%;">Propia:</td>
							<td><input type="checkbox" value="Propia" name="tipoVivienda" class="checkbox-inline"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Rentada:</td>
							<td><input type="checkbox" value="Rentada" name="tipoVivienda" class="checkbox-inline">
							</td>
						</tr>
						<tr>
							<td style="width: 25%;">De familiares:</td>
							<td><input type="checkbox" value="Rentada" name="tipoVivienda" class="checkbox-inline">
							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

	<br>
	<!--=======================================Formulario del modelo RefLab=========================-->
	<div style="background-color: #E5007E; color: white;">
		<label>I. Referencias Laborales</label>
	</div>	
	<br>
	<!--=============================Primera Referencia Laboral=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Último empleo o actual</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre de la Empresa:</td>
							<td><input type="text" name="nomEmpresa1" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Giro:</td>
							<td><input type="text" name="giro1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Domicilio:</td>
							<td><input type="text" name="domicilio1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Colonia:</td>
							<td><input type="text" name="colonia1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Delegación/Municipio:</td>
							<td><input type="text" name="delMun1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Último puesto:</td>
							<td><input type="text" name="ultimoPuesto1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Jefe inmediato:</td>
							<td><input type="text" name="jefeInmediato1" class="form-control")></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de ingreso:</td>
							<td><input type="date" name="fechIngreso1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de salida:</td>
							<td><input type="date" name="fechSalida1" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Sueldo inicial:</td>
							<td><input type="text" name="sueldoIni1" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Sueldo final:</td>
							<td><input type="text" name="sueldoFinal1" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Motivo de salida:</td>
							<td><input type="text" name="motSalida1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Nombre de responsable de RH:</td>
							<td><input type="text" name="responsableRH1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Comentarios:</td>
							<td><input type="text" name="comentarios1" class="form-control"></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

	<!--=============================Segunda Referencia Laboral=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Penúltimo Empleo</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre de la Empresa:</td>
							<td><input type="text" name="nomEmpresa2" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Giro:</td>
							<td><input type="text" name="giro2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Domicilio:</td>
							<td><input type="text" name="domicilio2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Colonia:</td>
							<td><input type="text" name="colonia2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Delegación/Municipio:</td>
							<td><input type="text" name="delMun2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Último puesto:</td>
							<td><input type="text" name="ultimoPuesto2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Jefe inmediato:</td>
							<td><input type="text" name="jefeInmediato2" class="form-control")></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de ingreso:</td>
							<td><input type="date" name="fechIngreso2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de salida:</td>
							<td><input type="date" name="fechSalida2" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Sueldo inicial:</td>
							<td><input type="text" name="sueldoIni2" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Sueldo final:</td>
							<td><input type="text" name="sueldoFinal2" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Motivo de salida:</td>
							<td><input type="text" name="motSalida2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Nombre de responsable de RH:</td>
							<td><input type="text" name="responsableRH2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Comentarios:</td>
							<td><input type="text" name="comentarios2" class="form-control"></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div> 

	<!--=============================Tercera Referencia Laboral=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Antepenúltimo empleo</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre de la Empresa:</td>
							<td><input type="text" name="nomEmpresa3" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Giro:</td>
							<td><input type="text" name="giro3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Domicilio:</td>
							<td><input type="text" name="domicilio3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Colonia:</td>
							<td><input type="text" name="colonia3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Delegación/Municipio:</td>
							<td><input type="text" name="delMun3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Último puesto:</td>
							<td><input type="text" name="ultimoPuesto3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Jefe inmediato:</td>
							<td><input type="text" name="jefeInmediato3" class="form-control")></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de ingreso:</td>
							<td><input type="date" name="fechIngreso3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Fecha de salida:</td>
							<td><input type="date" name="fechSalida3" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Sueldo inicial:</td>
							<td><input type="text" name="sueldoIni3" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Sueldo final:</td>
							<td><input type="text" name="sueldoFinal3" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Motivo de salida:</td>
							<td><input type="text" name="motSalida3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Nombre de responsable de RH:</td>
							<td><input type="text" name="responsableRH3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Comentarios:</td>
							<td><input type="text" name="comentarios3" class="form-control"></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

	<!--================================Modelo DatosSocioE==========================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>RESULTADO DE REFERENCIAS LABORALES:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td>
								<textarea name="resRefLab" class="form-control" rows="7" cols="60"></textarea>
							</td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

	<div class="table-responsive">
		<table class="table table-striped table-bordered table-condensed table-hover">
			<thead style="background-color: #E5007E; color: white;">
				<th>MAPA DE UBICACIÓN DE VIVIENDA:</th>
			</thead>
			<tbody>
				<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<tr>
						<td>
							<textarea name="" class="form-control" rows="7" cols="60"></textarea>
							<input type="file" name="mapa" class="form-control" placeholder="Foto del aspirante">
						</td>
					</tr>
				</table>
			</tbody>
		</table>
	</div>

	<!--================================Modelo RefPers==========================================-->
	<br>
	<div style="background-color: #E5007E; color: white;">
		<label>II. Referencias Personales</label>
	</div>	
	<br>

	<!--=============================Primera Referencia Laboral=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th> Referencia 1</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombrePers1" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Telefono:</td>
							<td><input type="text" name="telefonoPers1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Parentesco:</td>
							<td><input type="text" name="parentesco1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Cuánto tiempo tiene de conocerlo?:</td>
							<td><input type="text" name="tmpConocer1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Qué opinión tiene de él?:</td>
							<td><input type="text" name="opinion1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Lo recomendaría para laborar con nosotros? :</td>
							<td><input type="text" name="recomienda1" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Observaciones:</td>
							<td><input type="text" name="observacion1" class="form-control")></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

	<!--=============================Segunda Referencia Laboral=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th> Referencia 2</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombrePers2" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Telefono:</td>
							<td><input type="text" name="telefonoPers2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Parentesco:</td>
							<td><input type="text" name="parentesco2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Cuánto tiempo tiene de conocerlo?:</td>
							<td><input type="text" name="tmpConocer2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Qué opinión tiene de él?:</td>
							<td><input type="text" name="opinion2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Lo recomendaría para laborar con nosotros? :</td>
							<td><input type="text" name="recomienda2" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Observaciones:</td>
							<td><input type="text" name="observacion2" class="form-control")></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

	<!--=============================Primera Referencia Laboral=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th> Referencia 3</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombrePers3" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Telefono:</td>
							<td><input type="text" name="telefonoPers3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Parentesco:</td>
							<td><input type="text" name="parentesco3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Cuánto tiempo tiene de conocerlo?:</td>
							<td><input type="text" name="tmpConocer3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Qué opinión tiene de él?:</td>
							<td><input type="text" name="opinion3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Lo recomendaría para laborar con nosotros? :</td>
							<td><input type="text" name="recomienda3" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Observaciones:</td>
							<td><input type="text" name="observacion3" class="form-control")></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

		<!--================================Modelo RefFam==========================================-->
	<br>
	<div style="background-color: #E5007E; color: white;">
		<label>III. Referencias Familiares</label>
	</div>	
	<br>

	<!--=============================Primera Referencia Familiar=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th> Referencia 1</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombrePers4" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Telefono:</td>
							<td><input type="text" name="telefonoPers4" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Parentesco:</td>
							<td><input type="text" name="parentesco4" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Cuánto tiempo tiene de conocerlo?:</td>
							<td><input type="text" name="tmpConocer4" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Qué opinión tiene de él?:</td>
							<td><input type="text" name="opinion4" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Lo recomendaría para laborar con nosotros? :</td>
							<td><input type="text" name="recomienda4" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Observaciones:</td>
							<td><input type="text" name="observacion5" class="form-control")></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

	<!--=============================Segunda Referencia Familiar=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th> Referencia 2</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombrePers5" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Telefono:</td>
							<td><input type="text" name="telefonoPers5" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Parentesco:</td>
							<td><input type="text" name="parentesco5" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Cuánto tiempo tiene de conocerlo?:</td>
							<td><input type="text" name="tmpConocer5" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Qué opinión tiene de él?:</td>
							<td><input type="text" name="opinion5" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Lo recomendaría para laborar con nosotros? :</td>
							<td><input type="text" name="recomienda5" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Observaciones:</td>
							<td><input type="text" name="observacion4" class="form-control")></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>	

	<!--=========================Primera Referencia Familiar=====================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th> Referencia 1</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Nombre:</td>
							<td><input type="text" name="nombrePers6" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Telefono:</td>
							<td><input type="text" name="telefonoPers6" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Parentesco:</td>
							<td><input type="text" name="parentesco6" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Cuánto tiempo tiene de conocerlo?:</td>
							<td><input type="text" name="tmpConocer6" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Qué opinión tiene de él?:</td>
							<td><input type="text" name="opinion6" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">¿Lo recomendaría para laborar con nosotros? :</td>
							<td><input type="text" name="recomienda6" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Observaciones:</td>
							<td><input type="text" name="observacion6" class="form-control")></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>

	<br>
	<div style="background-color: #E5007E; color: white;">
		<label>IV. Referencias Psicosociales</label>
	</div>	
	<br>
	<!--================================Modelo de Psicosocial========================================-->
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead >
					<th style="width:25%;"> Redes Sociales</th>
					<th>Observaciones</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td style="width: 25%;">Facebook:</td>
							<td><input type="text" name="FacebookObs" class="form-control" ></td>
						</tr>
						<tr>
							<td style="width: 25%;">Linkedin:</td>
							<td><input type="text" name="LinkedObs" class="form-control"></td>
						</tr>
						<tr>
							<td style="width: 25%;">Twitter:</td>
							<td><input type="text" name="TwitterObs" class="form-control"></td>
						</tr>
					</table>
				</tbody>
			</table>
	</div>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Anexos:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td>
								<textarea name="Resultado" class="form-control" rows="7" cols="60"></textarea>
								<input type="file" name="anexos" class="form-control" placeholder="Foto del aspirante">

							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>

	<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #E5007E; color: white;">
					<th>Resumen de Referencia:</th>
				</thead>
				<tbody>
					<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<tr>
							<td>
								<textarea name="Resultado" class="form-control" rows="7" cols="60"></textarea>
							</td>
						</tr>
					</table>
				</tbody>
			</table>
		</div>
	<br>
	<div style="background-color: #E5007E; color: white;">
		<label>Resultado de Certificación</label>
	</div>	
	<br>
		<div class="table-responsive">
			<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center; border: solid #f4f4f4; ">
				<tr>
					<td><label>Certificado
						<input type="checkbox" value="1" name="Certificado" class="checkbox-inline"></label></td>
					<td><label>Certificado con Reservas
						<input type="checkbox" value="2" name="Certificado" class="checkbox-inline"></label></td>
					<td><label>No Certificado
						<input type="checkbox" value="3" name="Certificado" class="checkbox-inline"></label></td>
				</tr>
			</table>		
		</div><br><br>
		<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
	</div>
</div>

{!!Form::close()!!}


	
@endsection
