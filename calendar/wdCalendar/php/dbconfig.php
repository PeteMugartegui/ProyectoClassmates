<?php
class DBConnection{
	function getConnection(){
	  //change to your database server/user name/password
		mysql_connect("localhost","root","12345") or
         die("Could not connect: " . mysql_error());
    //change to your database name
		mysql_select_db("classmates") or 
		     die("No se pudo acceder a la base de datos: " . mysql_error());
	}
}
?>