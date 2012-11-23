<?php

$con = mysql_connect("localhost","root","12345");  


if(!$con)
{
    die('no se pudo conectar con el servidor'.mysql_error());

}

     $valor1 = $_POST['materia'];
     $valor2 = $_POST['dia'];
     $valor3 = $_POST['horas'];
     $valor4 = $_POST['minutos'];
     $valor5 = $_POST['dif'];


    if(isset($valor1) && isset($valor2) && isset($valor3) && isset($valor4) && isset($valor5)) {

	mysql_select_db("classmates",$con);

	
	$consulta="INSERT INTO horario(materia,dia,hora,minuto,dif)
	   VALUES ('$_POST[materia]','$_POST[dia]','$_POST[horas]','$_POST[minutos]','$_POST[dif]')";
	
        if(!mysql_query($consulta,$con))
           {
             die('Error de insercion'.mysql_error());
        }
        echo "Se agrego un registro"; 
   } header("Location: horario.html");

?>