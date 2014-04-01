<?php
	
	$db_host="localhost";
	$db_usuario="root";
	$db_password="warmachine68";
	$db_nombre="cvs";
	$conexion = mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error());
	$db = mysql_select_db($db_nombre, $conexion) or die(mysql_error());
	echo "conexion exitosa"; 



?>
