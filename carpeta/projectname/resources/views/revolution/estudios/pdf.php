<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Estudio SocioEconomico</title>
	
	<link rel="stylesheet" href="css1/estudioPDF.css">
	<link rel="stylesheet" href="css1/estudios.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


		 
</head>
<body>
	<!-- ================================================inicio ENCABEZADO DE LA PAGINA=====================================================-->
	<div class="row ">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<img src="img/logo_revvolution.png" class="enImg">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<label class="tituloP">RESULTADOS DE INVESTIGACIÓN SOCIECONÓMICA Y PSICOSOCIAL</label>
		</div>
	</div><br>
	<!-- ==================================================fin ENCABEZADO DE LA PAGINA=======================================================-->
	<!--===================================================Formulario del modelo EstudioSocioE============================================== -->	
	<div class="row cuadro">
		<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
			<label class="tit">RESULTADO DE INVESTIGACION SOCIOECONOMICA Y PSICOLOGICA REALIZADA A:</label>
		</div>
	</div>
	<div class="row cuadro">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<img src="imagenes/escom2.png" class="imagen" class="imagen">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<label class="color" >Nombre:</label> <?php echo$estudio->nombrePostulado; ?><br>
			<label class="color">Puesto:</label> <?php echo$estudio->puestoSol; ?><br>
			<label class="color">Fecha de solicitud:</label> <?php echo$estudio->fechSol; ?><br>
			<label class="color">Fecha de entrega:</label> <?php echo$estudio->fechEntr; ?><br>
			<label class="color">Atencion a:</label> <?php echo$estudio->atencion; ?><br>
			<label class="color">Region:</label> <?php echo$estudio->region; ?>
		</div>
	</div><br>

	<div class="row encabezado2 cuadro">
		<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
			<label>Resumen investigacion telefonica:</label>
		</div>
	</div>
	<div class="row cuadro tam">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo $estudio->telefonica; ?></p>
		</div>		
	</div>


	<div class="row encabezado2 cuadro separacion">
		<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
			<label>Resumen investigacion familiar:</label>
		</div>
	</div>
	<div class="row cuadro tam">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo $estudio->familiar; ?></p>
		</div>		
	</div>

	<div class="row encabezado2 cuadro separacion">
		<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
			<label>Resumen investigacion laboral:</label>
		</div>
	</div>
	<div class="row cuadro tam">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo $estudio->laboral; ?></p>
		</div>		
	</div>

	<div class="row encabezado2 cuadro separacion">
		<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
			<label>Resumen investigacion psicosocial:</label>
		</div>
	</div>
	<div class="row cuadro tam">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo $estudio->psicosocial; ?></p>
		</div>		
	</div>

	<div class="titulo">
		<p>Existen factores de riesgo: (Marque si se encontro algun factor de riesgo para considerar por el cliente)</p>
	</div>
	<div class="row semicuadro1 color altura">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<p>Factor Riesgo</p>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p>Observaciones</p>
		</div>
	</div>
	<div class="row cuadrado altura" >
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 lin color">
			<p>Deshonestidad </p>
			
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo$estudio->obsHonestidad; ?></p>
		</div>
	</div>
	<div class="row cuadrado altura" >
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 lin color">
			<p>Adicciones </p>	
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo$estudio->Obsadic; ?></p>
		</div>
	</div>
	<div class="row cuadrado altura" >
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 lin color">
			<p>Perversion sexual  </p>	
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo$estudio->Obsperv; ?></p>
		</div>
	</div>
	<div class="row semicuadro2 altura" >
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 lin color">
			<p>Inestabilidad emocional </p>	
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<p><?php echo$estudio->ObsEmo; ?></p>
		</div>
	</div>

	<div class="titulo">
		<p>SUGERENCIA DE RESULTADO</p>
	</div>
	<div class="row cuadro2">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 color posicion2">
			<div >
				<label >Certificado </label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 posicion2">
					<?php if($estudio->resultado=='Certificado'){?>
						<p class="marca">X</p>
					<?php }else{ ?>
						<p class="marca"></p>
					<?php } ?>

		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 color posicion2">
			<div >
				<label >Certificado con Reservas </label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 posicion2">
					<?php if($estudio->resultado=='Reservas'){?>
						<p class="marca">X</p>
					<?php }else{ ?>
						<p class="marca"></p>
					<?php } ?>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 color posicion2">
			<div >
				<label> No Certificado </label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 posicion2">
					<?php if($estudio->resultado=='NoCertificado'){?>
						<p class="marca">X</p>
					<?php }else{ ?>
						<p class="marca"></p>
					<?php } ?>
		</div>		
	</div>
	<!-- ================================================inicio ENCABEZADO DE LA PAGINA=====================================================-->
	<div class="row ">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<img src="img/logo_revvolution.png" class="enImg">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<label class="tituloP">RESULTADOS DE REFERENCIAS LABAORALES</label>
		</div>
	</div><br>
	<!-- ================================================fin ENCABEZADO DE LA PAGINA=====================================================-->
	<!-- ===================================================inicio Datos del estudii=====================================================-->
	<div class="row semicuadro1">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Nombre del evaluado:</label>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 linea2 ">
				<p><?php echo$personales->nombre; ?></p>
		</div>
	</div>
	<div class="row semicuadro2">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
			<label class="color">Puesto Solicitado:</label>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 linea2 ">
				<p><?php echo$estudio->puestoSol; ?></p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<label class="color">Fecha de Evaluación:</label>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 linea2 ">
				<p><?php echo$personales->fechEval; ?></p>
		</div>
	</div><br>

 <!-- ======================================================fin Datos del estudii====================================================-->
	
	<div class="row encabezado2 cuadro">
		<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
			<label>Datos Generales:</label>
		</div>
	</div>

	<div class="row semicuadro3" style="">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
			<label class="color">Edad: <?php echo$personales->edad;?></label>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
			<label class="color">Fecha de nacimiento:</label>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<p ><?php echo$personales->fechNac; ?></p>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
			<label class="color">Lugar de nacimiento:</label>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<p><?php echo$personales->lugarNac; ?></p>
		</div>
	</div>
	<div class="row laterales altura">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
			<label class="color">Estado Civil:</label>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 linea2">
			<p><?php echo$personales->edoCivil;?></p>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
			<label class="color">Grado Académico:</label>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<p ><?php echo$personales->gradoAcad; ?></p>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
			<label class="color">Teléfono de Casa:</label>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 linea2">
			<p><?php echo$personales->telCasa; ?></p>
		</div>
	</div>


	
		

<!-- jQuery 2.1.4 -->
    <script src="js2/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js2/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="'js2/app.min.js"></script>
    <!-- Plugin para validar form-->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
</body>
</html>