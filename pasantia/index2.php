<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['idRol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto INTERSHIP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/14.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/5.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4 style="color:#FF0000";>REQUISITO PARA LA TOMA DE PASANTIA</h4>
				  <p>1.- El estudiante debe estar inscrito en la pasantia I, II, III en la gestion actual</p>
				  <p>2.- Buscar o asignar una empresa del rubro que este legalmente establecida(tenga NIT, salvo casos
				         ecepcionales)</p>
				  <p>3.- Una vez que el estudiante tenga datos de la empresa:(nombre, rubro, 
				         telefono, direccion y el nombre del gerente o propietario, en el cual realiza su pasantia)luego debe solicitar 
				         el FORMULARIO DE SOLICITUD DE LA CARTA DE PASANTIA en fotocopiadora o en la unidad
				         de RECEPCION/DESPACHO DE TRAMITES del area de registros y certificaciones.</p>
				  <p>4.- Una vez autorizado el FORMULARIO DE CARTA DE PASANTIA por la jefatura
				         de carrera o docente tutor responsable y con su sello de carrera, el estudiante 
				         debera llevar la misma a oficinas del area de registro e inscripciones  
				         y entregar en RECEPCION/DESPACHO DE TRAMITES, todo esto para elaborar la CARTA DE FORMALIZACION 
				         DE INICIO DE PASANTIA con la empresa y la instituicion. LA CARTA ESTARA LISTA EN 48 HORAS  </p>
				  <p>5.- Despues de 48 horas, el estudiante debera recoger la carta de la unidad de RECEPCION/DESPACHO
				         DE TRAMITES del area de registros e inscripciones, sacar 2 copias(una para file del estudiante y la otra
				         para firmar la fecha de recibido en la empresa), la carta original debera entregar a la empresa correspondiente
				         .en la empresa se le asignara un supervisor y se coordinaran los horarios de trabajo.NOTA:la pasantia}
				          debe realizarse fuera de horarios de clase.</p>
				  <p>6.- una vez concertado el horario con la empresa de debe pedir en fejatura de carrera los formularios de FICHA
				        DE SOLICITUD DE PASANTIA y la FICHA DE PLAN DE TRABAJO de pasantia(segun formato de cada carrera), el cual debe llenado
				        con la ayuda del supervisor de la empresa y llevar las firmas correspondientes.
				        </p>
				  <p>7.- la pasantia empieza cuando el supervisor de la empresa y el estudiante concretizan su horario de trabajo
				         y el estudiente presenta sus formularios de FICHA DE PASANTIA y la FICHA DE PLAN DE TRABAJO de pasantia
				         en fejatura de carrera o al docente responsable de pasantias.El estudiante no puede iniciar la pasantia
				         sin haber entregado ambos formularios de carrera, ya que las horas de pasantia cuentan desde el momento 
				         de aprobacion de la misma.</p>
				  <p>8.- el estudiante debera cancelar en cajas el monto de 50 por concepto de "Cuaderno de pasantia"y posteriormente
				        recoger su cuaderno de pasantia en el area de almacenes de la institucion con su comprobante de pago.</p>
				  <p>9.- La carrera designara un tutor al pasante, quien hara seguimineto al trabajo del pasante, revisara el CUADERNO 
				         de pasantias semanalmente y realizara una visita sopresa a la empresa/taller para hacer segimiento al trabajo del
				         pasante. y otra visita para realizar la evaluacion final del estudiante junto con el supervisor de la empresa
				         (segun formato de cada carrera).</p>
				 
				  
			</div>
		  </div>
		  <div class="item">
			<img src="images/5.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4 style="color:#FF0000";>REQUISITO PARA LA ENTREGA DE DOCUMENTOS ESTUDIANTES-PASANTES A TUTOR</h4>
				  <p>1.-Al concluir la pasantia(una vez cumplido con las 160 horas en el regimen semestral y 240 
				  horas en el regimen anual),el estudiante debera solicitar a la empresa el 
				  *CERTIFICADO DE PASANTIA,el cualdebera estar en hoja membretada con firma del supervisor inmediato y feje de la empresa, con los
				  sellos respectivos(ver el formato en la ultimo hoja del cuaderno de pasantia).Este certificado debe 
				  ser presentado junto con el CUADERNO DE PASANTIA, INFORME TECNICO(solicitud el formato en fejatura de carrera)
				  y REGISTRO DIARIO (firmado por el supervisor) hasta maximo 1 semana de haber culminado la pasantia. Fotocopia del certificado
				  de pasantia.</p>
				  <p>2.-Estudiante que no se encuentre en la pasantia cuando el tutor de carrera realice la visita sorpresa queda
				  automaticamente REPROBADO</p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/5.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4 style="color:#FF0000";>REQUISITO PARA LA ENTREGA DE DOCUMENTOS DE TUTOR A REGISTROS </h4>
				  <p style="color:#5DADE2">1.- El CERTIFICADO DE PASANTIA estar limpio, sin suciedad y sin borrones.</p>
				  <p style="color:#5DADE2">2.- EL CERTIFICADO DE PASANTIA- Y FICHA DE EVALUACION FINAL- INFORME TECNICO ESTUDIANTE  deben 
				         llevar las misma FECHAS DE INICIO Y FINALIZACION. Ademas, tener visible el nro.de pasantia cursado
				          por el estudiante.</p>
				  <p style="color:#5DADE2">3.- EL CERTIFICADO DE PASANTIA Y LA FICHA DE EVALUACION FINAL debera contar con la firma y 
				        sello del empresario o feje de taller. en caso de no tener sello debera acompañar
				        la fotocopiadora de CI. del empresario o feje de taller</p>
				  <p style="color:#5DADE2">4.- todos los documentos:
				        a.cerficado de pasantia original
				        b.fotocopia de certificado de pasantia
				        c.ficha de evaluacion final carrera
				        d.ficha evaluacion empresa
				        e.informe tecnico estudiante
				        f.ficha registro de asistencia diaria.
				        g.informe final docente.
				    deberan estar correctamente llenados con el NOMBRE COMPLETO DEL ESTUDIANTE, FECHAS DE INICIO Y CONCLUSION,
				    CANTIDAD DE HORAS, NUMERO DE PASANTIA.</p>
				  <p style="color:#5DADE2">5.- El informe final docente debera estar ordenado alfabeticamente y ademas debe separarse la 
				         nomina de APROBADOS Y REPROBADOS/ABANDONO en listas diferentes.</p>
				  <p style="color:#5DADE2">6.- La presentacion de la documentacion debera estar en orden alfabetico de acuerdo al INFORME FINAL 
				         elaborado tutor, y los documentos deben ir en el siguiente orden:
				                   PRIMERO:certificado de pasantia.
				                   SEGUNDO: fotocopia del certificado de pasantia.
				                   TERCERO: ficha de evaluacion final. con firmas y sellos respectivos.
				                   CUARTO:Ficha tecnica del estudiante. debe estar firmado por el estudiante y docente tutor.
				                   QUINTO:croquis del lugar de la pasantia.
				                   SEXTO:ficha de registro de asistencia del estudiante debe estar firmado por el tutor de la 
				                   empresa y llevar el sello de la empresa/ taller(si corresponde).</p>
				  <p style="color:#5DADE2">7.- Al informe final del docente se debe adjuntar la ficha de SEGUIMIENTO DE PASANTIA.</p>
				  <p style="color:#5DADE2">8.- Las fechas de presentacion se realizaran de acuerdo al calendario Academico vigente.
				               a.- en caso de estudiante de 6° semestre sera de acuerdo a las fechas esytablecidos en 
				                   calendario academico.
				               b.- Para semestres inferiores sera una semana antes del Cierre de la Gestion academica actual.</p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>FUNCIONALIDAD</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>DIGITALIZAR LOS DOCUMENTO</h4>
					<a href="al.php"><small>Ver detalles</small></a>
					<table>
						<td width=80 align=center><input class="btn btn-primary" type="submit" value="entrar"></td>
					</table>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>VERIFICACION DE VISITA AL SUPERVISOR</h4>
					<a href="te.php"><small>Ver detalles</small></a>
					<table>
						<td width=80 align=center><input class="btn btn-primary" type="submit" value="entrar"></td>
					</table>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>RECEPCION DE DOCUMENTOS PARA REGISTRO</h4>
					<a href="fi.php"><small>Ver detalles</small></a>
					<table>
						<td width=80 align=center><input class="btn btn-primary" type="submit" value="entrar"></td>
					</table>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>CALIFICACION FINAL DEL PASANTE</h4>
					<a href="fp.php"><small>Ver detalles</small></a>
					<table>
						<td width=80 align=center><input class="btn btn-primary" type="submit" value="entrar"></td>
					</table>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>FORMULARIO DE CALIFICACION DEL TUTOR A PASANTE</h4>
					<a href="fm.php"><small>Ver detalles</small></a>
					<table>
						<td width=80 align=center><input class="btn btn-primary" type="submit" value="entrar"></td>
					</table>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>FORMULARIO DE CALIFICACION DEL SUPERVISOR A PASANTE</h4>
					<a href="md.php"><small>Ver detalles</small></a>
					<table>
						<td width=80 align=center><input class="btn btn-primary" type="submit" value="entrar"></td>
					</table>
				</div>
			</div>

<!--	
			<div class="span12">
				<div class="well well-small">
					<h4 >La educación a distancia, Fundamentos, Teorias y Contribuciones</h4>
					<a href="edf.php"><small>Ver detalles</small></a>

					
					<h4>Material Impreso en la educación a distancia</h4>
					<a href="mie.php"><small>Ver detalles</small></a>


				</div>
			</div>
		
			
			
</div>
<h3>Nuestros cursos mas sobresalientes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Algebra Lineal</h3>	
	<img src="images/algebra.jpg" alt="#"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
El álgebra lineal es una teoría matemática degeneralizaciones y métodos de análisis, en la que los conceptos son tanimportantes como los cálculos. El álgebra lineal pretende descubrir y matematizar las relaciones existentes entrelas distintas variables que caracterizan un fenómeno o un proceso. El álgebra lineal se aplica en distintos campos dela ciencia y tecnología como los modelos de pronóstico del clima, la investigación de operaciones, la utilización de reómetros, manejo de robots,las ciencias administrativas, etc.
	</p>
	<a class="pull-right" href="al.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Topografía Aplicada</h3>	
	<img src="images/topografia.jpg" />
	<div class="caption">
	<h5> Descrioción del Curso</h5>	
	<p align="justify">
	
La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo. Su estudio es de gran importancia para el diseño de Obras de Ingeniería Civil.
	</p>
	<a class="pull-right" href="ta.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Computación Básica</h3>	
	<img src="images/computacion.jpg"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
La informática es una ciencia  que en la actualidad ha generalizado su uso en las diferentes ramas del conocimiento,  por la capacidad de optimizar procesos así como de brindar soluciones y excelentes herramientas para realizar las tareas de manera sencilla y ágil.
De ahí que el estudio de ésta asignatura proporciona los conocimientos y habilidades necesarias para manejar la computadora, organizar y manipular la información en la realización de sus actividades cotidianas como estudiante y de manera general en el ámbito en el que se desenvuelva
	</p>
	<a class="pull-right" href="cb.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Importante</h3>	
		<p>
		Lo mejor para nosotros es proporcionar un acceso libre, sencillo y coherente a los materiales de los cursos que se ofrecen en sus modalidades de estudio presencial y a distancia para educadores, estudiantes y autodidactas de todo el mundo.<br><br></b></b>
		Crear un modelo eficiente basado en estándares generados de OCW Consortium, UNIVERSIA, la tendencia tecnológicas de la Web Social y Semántica.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3> Lo que vendrá</h3>
		<h5>Nuevos cursos</h5>	
		<p>
		Tendremos una página actualizada y nuestros miembros podrán contar con todos nuestros cursos disponibles, asi como la visualización de nuevos cursos que se añadan a la página.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p> <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>