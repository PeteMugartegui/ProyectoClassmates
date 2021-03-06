<!DOCTYPE HTML>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<meta charset="utf-8"/>
	<meta name="description" content="Tu horario de clases y agenda de actividades diarias en un solo lugar"/>
	<meta name="viewport" content="width-device-width, inicial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="../css/estilosclassmates.css"/>
	
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
              <li class="active"><a href="#">Menú</a></li>  
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
	
	<section id="principal">
		<p>Tu nombre de usuario es:</p>
    <p>
      <?php 
        echo $_COOKIE["usuario"];
      ?>
    </p>
    <?php
    include("../funciones.php");
    conectar();
    $query = mysql_query("SELECT * FROM usuario WHERE username='$_COOKIE[usuario]'");
          echo $query["email"];//EN CADA CELDA SE COLOCA EL CONTENIDO DE REG
          echo $query["nombres"];
          echo $query["apellidos"];
          echo $query["direccion"];
          echo "Hola";
    ?>
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
<script src="/../js/bootstrap.js"></script>
</body>
</html>