<?php
session_start();
$con = mysql_connect("localhost","root","12345");  

if(!$con)
{
    die('no se pudo conectar con el servidor'.mysql_error());

}
mysql_select_db("classmates",$con);

$valor1 = $_POST['usuario'];
$valor2 = $_POST['contrasena'];
$SESSION_query = mysql_query("SELECT username FROM usuario WHERE username='$valor1'");
$_SESSION= mysql_fetch_array($SESSION_query);

echo $query=mysql_query("SELECT username,password FROM usuario WHERE username = '$valor1' AND password = '$valor2' ");
// $resultado = @mysql_fetch_object("$query");
$contador = 0; 
while($resultado = mysql_fetch_array($query)) {
   $contador=$contador+1;
}

if ($contador==1) {
	header("Location: seleccionmenu.html");
	
}else{
	echo "El usuario y/o password son incorrectos";
	
}


?>