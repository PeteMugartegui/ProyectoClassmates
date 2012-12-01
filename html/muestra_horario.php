<?php

include_once("../funciones.php");
conectar();

echo "<table class='table table-condensed'>"; //EMPIEZA A CREAR LA TABLA CON LOS ENCABEZADOS DE TABLA
echo "<tr>";//<tr> CREA UNA NUEVA FILA
echo "<th>Materia</td>";//<td> CREA NUEVA COLUMNA
echo "<th>Dia</td>";
echo "<th>Hora</td>";
echo "<th>Dif</td>";
echo "</tr>";

$query = mysql_query("SELECT * FROM horario");
while ($resultado = mysql_fetch_array($query)) {
	echo "<tr>";
	echo "<td>".$resultado["materia"]."</td>";//EN CADA CELDA SE COLOCA EL CONTENIDO DE REG
	echo "<td>".$resultado["dia"]."</td>";
	echo "<td align='rigth'>".$resultado["hora"]." : ".$resultado["minuto"]."</td>";
	echo "<td>".$resultado["dif"]."</td>";
	echo "</tr>";

}
echo "</table>";//FINALIZA LA TABLA
desconectar();
?>