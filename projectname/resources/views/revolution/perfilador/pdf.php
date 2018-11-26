<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<body>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-4 col-xs-4" >
			<div class="form-group">
				<img src="img/logo1.jpg" style="width: 50%; height: 45%;">
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-4 col-xs-4" style="margin-top: 20px;">
			<div class="form-group">
				<h2 style="color: #E5007E;">Perfilador</h2>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label style="background-color: #E5007E; color: white; width: 100%;">Datos Contacto</label>
		</div>
	</div>

	<table class="table table-striped table-bordered table-condensed table-hover" >
		<tr>
			<td style="width: 30%;  "><label>Razón Social:</label></td>
			<td> <?php echo  $contacto->razonSocial; ?></td>
		</tr>
		<tr>
			<td style="width: 30%;  "><label>Nombre comercial de la Empresa:</label></td>
			<td> <?php echo  $contacto->nombre?> </td>
		</tr>
		<tr>
			<td style="width: 30%;  "><label>Giro de la Empresa:</label></td>
			<td> <?php echo  $contacto->giro?> </td>
		</tr>
		<tr>
			<td style="width: 30%; "><label>Tamaño de la Empresa:</label></td>
			<td> <?php echo  $contacto->tamano?> </td>
		</tr>
		<tr>
			<td style="width: 30%; "><label>Dirección Física:</label></td>
			<td> <?php echo  $contacto->direccion?> </td>
		</tr>
		<tr>
			<td style="width: 30%; "><label>Nombre del Contacto:</label></td>
			<td> <?php echo  $contacto->contacto?> </td>
		</tr>
		<tr>
			<td style="width: 30%; "><label>Puesto del Contacto:</label></td>
			<td> <?php echo  $contacto->cargo?> </td>
		</tr>
		<tr>
			<td style="width: 30%; "><label>Telefonos del Contacto:</label></td>
			<td> <?php echo  $contacto->telefono?> </td>
		</tr>
		<tr>
			<td style="width: 30%; "><label>Email del Contacto:</label></td>
			<td><?php echo  $contacto->email?> </td> 
		</tr> 
	</table>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label style="background-color: #E5007E; color: white; width: 100%;">Características del puesto</label>
		</div>
	</div>

	<table class="table table-striped table-bordered table-condensed table-hover" >
		<tr>
			<td style="width: 30%;"><label>Nombre del puesto a cubrir:</label></td>
			<td> <?php echo $carac->puesto ?></td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Número de posiciones a reclutar:</label></td>
			<td> <?php echo $carac->cantidad ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Objetivos del Puesto:</label></td>
			<td><?php echo $carac->objetivo ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Actividades del Puesto:</label></td>
			<td><?php echo $carac->actividades ?></td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>¿A qué puesto reportará?:</label></td>
			<td> <?php echo $carac->reporte ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Días de trabajo:</label></td>
			<td> <?php echo $carac->diasLab ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Horario Laboral:</label></td>
			<td> <?php echo $carac->horario ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Luegar de trabajo:</label></td>
			<td> <?php echo $carac->lugar ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Rango de Edad:</label></td>
			<td> <?php echo $carac->rangoEdad ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Sexo:</label></td>
			<td> <?php echo $carac->sexo ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Estado Civil:</label></td>
			<td> <?php echo $carac->estadoCivil ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>¿Tendrá Gente a su cargo?:</label></td>
			<td> <?php echo $carac->genteCargo ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>¿Con qué actores internos de la compañía se relaciona?:</label></td>
			<td> <?php echo $carac->actoresInternos ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>¿Con qué actores externos de la compañía se relaciona?:</label></td>
			<td> <?php echo $carac->actoresExternos ?> </td>
		</tr>
	</table>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label style="background-color: #E5007E; color: white; width: 100%;">Educación, Competencias y Habilidades</label>
		</div>
	</div>

	<table class="table table-striped table-bordered table-condensed table-hover">
		<tr>
			<td style="width: 30%;"><label>Escolaridad:</label></td>
			<td> <?php echo $educa->escolaridad ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Conocimientos requeridos:</label></td>
			<td><?php echo $educa->conocimientos ?></td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Experiencia requerida:</label></td>
			<td> <?php echo $educa->experiencia ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Competencias requeridas:</label></td>
			<td> <?php echo $educa->competencias ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Habilidades requeridas:</label></td>
			<td> <?php echo $educa->habilidades ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>% de paquetería Office:</label></td>
			<td> <?php echo $educa->office ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>¿Para qué función(es) lo(s) utiliza:</label></td>
			<td> <?php echo $educa->funcionesOffice ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>% de paquetería de software adicionales:</label></td>
			<td> <?php echo $educa->adicional ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>¿Para qué función(es) lo(s) utiliza?:</label></td>
			<td> <?php echo $educa->funcionesAdicional ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Herramientas, maquinaria o equipo a utilizar:</label></td>
			<td><?php echo $educa->herramientas ?></td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Idiomas adicionales:</label></td>
			<td><?php echo $educa->idiomas ?></td>
		</tr>
	</table>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label style="background-color: #E5007E; color: white; width: 100%;">Sueldo y Prestaciones</label>
		</div>
	</div>

	<table class="table table-striped table-bordered table-condensed table-hover">
		<tr>
			<td style="width: 30%;"><label>Sueldo Mensual:</label></td>
			<td> <?php echo $prest->sueldo ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Periodo de Pago:</label></td>
			<td> <?php echo $prest->pago ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Prestaciones:</label></td>
			<td> <?php echo $prest->prestaciones ?> </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>% de Comisiones por venta:</label></td>
			<td> <?php echo $prest->comisiones ?>  </td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Métrica de ventas mensuales:</label></td>
			<td> <?php echo $prest->metricas ?> </td>
		</tr>
	</table>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label style="background-color: #E5007E; color: white; width: 100%;">Proceso de Reclutamiento</label>
		</div>
	</div>

	<table class="table table-striped table-bordered table-condensed table-hover">
						<tr>
							<td style="width: 35%;"><label>Número de entrevistas con el cliente:</label></td>
							<td> <?php echo $reclu->entrevistas ?> </td>
						</tr>
						<tr>
							<td style="width: 35%;"><label>¿Quíen(es) entrevista(n)?:</label></td>
							<td> <?php echo $reclu->entrevistador ?> </td>
						</tr>
						<tr>
							<td style="width: 35%;"><label>Entrevistador Sustituto:</label></td>
							<td><?php echo $reclu->sustituto ?></td>
						</tr>
						<tr>
							<td style="width: 35%;"><label>¿Aplican alguna prueba psicométrica?:</label></td>
							<td><?php echo $reclu->psicometrico ?></td>
						</tr>
						<tr>
							<td style="width: 35%;"><label>¿Aplican algún estudio socioeconomico, médico o de otro tipo? :</label></td>
							<td><?php echo $reclu->ese ?></td>
						</tr>
						<tr>
							<td style="width: 35%;"><label><label>Durante la entrevista ¿Qué particularidad es importante observar?:</label></td>
							<td> <?php echo $reclu->particularidad ?> </td>
						</tr>
						<tr>
							<td style="width: 35%;"><label><label>Fecha máxima para cubrir la vacante:</label></td>
							<td> <?php echo $reclu->fechMax ?> </td>
						</tr>
						<tr>
							<td style="width: 35%;"><label>Motivos potenciales de posible recahzo del candidato:</label></td>
							<td> <?php echo $reclu->rechazo ?> </td>
						</tr>
						<tr>
							<td style="width: 35%;"><label>Comentarios adicionales:</label></td>
							<td> <?php echo $reclu->comentarios ?> </td>
						</tr>
					</table>
	
</body>

</html>


