<?php
function conectar(){
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database ="classmates";

	$conection = mysql_connect($host, $user, $pass);
	if(!$conection){
	    die('no se pudo conectar con el servidor'.mysql_error());
	}else{
		//echo "Conectado a mysql";
		mysql_select_db($database, $conection);
	}
}

function desconectar(){
	mysql_close();
}

?>