<?php
include_once("../funciones.php");
conectar();

$materia = $_POST['materia'];
echo $dia = $_POST['dia'];
$hora = $_POST['horas'];
$minutos = $_POST['minutos'];
$am_pm = $_POST['dif'];


if(isset($materia) && isset($dia) && isset($hora) && isset($minutos) && isset($am_pm)) {
    $consulta = "INSERT INTO horario(materia,dia,hora,minuto,dif) 
    VALUES ('$materia','$dia','$hora','$minutos','$am_pm')";
    if(!mysql_query($consulta)){
        die('Error de insercion'.mysql_error());
    }
    //echo "Se agrego un registro"; 
}
header("Location: horario.html");

desconectar();
?>