<?php
//session_start();
$con = mysql_connect("localhost","root","12345");  

if(!$con)
{
    die('no se pudo conectar con el servidor'.mysql_error());

}
mysql_select_db("classmates",$con);

$valor1 = $_POST['usuario'];
$valor2 = $_POST['contrasena'];
//$username = mysql_fetch_array($query);
$sql = "SELECT username,password FROM usuario WHERE username = '$valor1' AND password = '$valor2' ";
$query = mysql_query($sql);
// $resultado = @mysql_fetch_object("$query");
$user = mysql_fetch_array($query);
;
//$contador = 0; 
//echo $resultado = mysql_affected_rows($query);echo "<pre>";
if ($user["username"] == $valor1) {
	setcookie("usuario","$valor1",time()+3600);
	echo "<script type='text/javascript'>
window.location='seleccionmenu.php';
</script>";
	//header("Location: seleccionmenu.php");
}
/*while($resultado = mysql_fetch_array($query)) {
   //$contador=$contador+1;
}*/

//f ($contador==1) {
	//header("Location: seleccionmenu.php");
	
else{
	echo "El usuario y/o password son incorrectos";
}


?>