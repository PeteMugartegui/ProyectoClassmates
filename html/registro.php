<?php

$con = mysql_connect("localhost","root","12345");  


if(!$con)
{
    die('no se pudo conectar con el servidor'.mysql_error());

}

     $valor1 = $_POST['usuario'];
     $valor2 = $_POST['email'];
     $valor3 = $_POST['contrasena'];
     $valor4 = $_POST['nombre'];
     $valor5 = $_POST['apellido'];
     $valor6 = $_POST['direccion'];


    if(isset($valor1) && isset($valor2) && isset($valor3) && isset($valor4) && isset($valor5) && isset($valor6)) {

	mysql_select_db("classmates",$con);

	setcookie("usuario",$valor1,time()+3600);
	$consulta="INSERT INTO usuario(username,email,password,nombres,apellidos,direccion)
	   VALUES ('$_POST[usuario]','$_POST[email]','$_POST[contrasena]','$_POST[nombre]','$_POST[apellido]','$_POST[direccion]')";
	
        if(!mysql_query($consulta,$con))
           {
             die('Error de insercion'.mysql_error());
        }
        echo "Se agrego un registro"; 
   } header("Location: seleccionmenu.php");

?>