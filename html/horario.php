<!DOCTYPE HTML>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<meta charset="utf-8"/>
	<meta name="description" content="Tu horario de clases y agenda de actividades diarias en un solo lugar"/>
	<meta name="viewport" content="width-device-width, inicial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="../css/estilosclassmates.css"/>
	<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
	<title>Tu horario de clases en cualquier dispositivo</title>
	<!--[if lt IE 9]>
	<script src= "//html5ahiv.googlecode.com/svn/trunk/html5.js" ></script>
	<!--[endif]-->
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" id="barra">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="../index.html">Classmates</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="../index.html">Home</a></li>
              <li><a href="About.html">About</a></li>
              <li><a href="contacto.html">Contact</a></li>
              <li class="active"><a href="seleccionmenu.php">Menú</a></li>  
            </ul>

            <ul class="nav pull-right">
            	<li><a href="iniciasesion.html">Iniciar Sesión</a></li>
            	<li><a href="registro.html">Registrarse</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <?php 
                    echo $_COOKIE["usuario"];
                   ?>
                 <b class="caret"></b>
               </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Cerrar Sesion</a></li>
                  <li><a href="#">Algo mas</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<header>
	<img class="fade" src="../img/classmateslogo.png"/>
</header>
<section>
	<form method="post" action="horario.php">
	<div class="row-fluid">
		<div align="center" class="span4"> 
			<label>Agregar Materia</label><br>
			<select class="span4" name="materia">
				  <option id="pro">Programación</option>
				  <option>Analisis y Diseño</option>
				  <option>Base de Datos</option>
				  <option>Sistemas Digitales</option>
				  <option>Circuitos</option>
			</select><br><br>
			<label>¿Qué día tienes tu clase?</label>
			<select class="span4" name="dia">
				<option id="1">Lunes</option>
				<option>Martes</option>
				<option>Miercoles</option>
				<option>Jueves</option>
				<option>Viernes</option>
			</select>
			<label>¿A que hora inicia tu clase?</label><br>
			<input class="span2" type="text" name="horas">:
			<input class="span2" type="text" name="minutos">
			<select class="span2" name="dif">
				<option value="am">a.m.</option>
				<option value="pm">p.m.</option>
			</select>
			<br /><br />
			<input type="submit" class="btn btn-primary" value="Enviar">
		</div>
		<!--Aqui va donde se muestra el horario-->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#horarioClases").load("muestra_horario.php");
			});
		</script>
		<div class="span8"> 
			<center>
				<label>Tu horario de clases:</label>
			<div class="rectangle" id="horarioClases"></div>
			</center>
		</div>
	</div>
	<a href="seleccionmenu.php">Regresar</a>
	<section id="principal">
		<article>
			
			
		</article>
		</form>
	</section>
	<aside>
		<!--Publicidad y Widgets Sociales-->
	</aside>
</section>
<div id="footer">
      <div class="container">
        <p align="center" class="muted credit">Classmates Todos los derechos reservados</p>
      </div>
    </div>
<!--EL javascript, situado al final para que la pagina cargue mas rapido-->
<script src="../js/bootstrap.js"></script>
</body>
</html>