<? php
session_start();
$con = mysql_connect("localhost","root","12345");  

if(!$con)
{
    die('no se pudo conectar con el servidor'.mysql_error());

}
mysql_select_db("classmates",$con);
$valor1 = '$_POST[usuario]';
$valor2 = '$_POST[contrasena]';

$query=@mysql_query('SELECT * FROM usuario WHERE valor1 ="'.mysql_real_escape_string($valor1).'" AND valor2="'.mysql_real_escape_string($valor2).'"');
if ($existe = @mysql_fetch_object("$query")) {
	
}else{
	echo "El usuario y/o password son incorrectos";
}


?>