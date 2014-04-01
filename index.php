<!DOCTYPE html>
<html lang= "es">
<head>
</head>
<body>
	<h1>Cargar un archivo nuevo</h1>
	<form method="post" action="upload.php"  enctype="multipart/form-data">
		<input type="file" name="archivo">
		<input type="submit" value="subir archivo" name="boton_cargar"/>
	</form>
	<h1>Consultar existente</h1>
	<form method="post" action="consulta.php"> 
	<h4>Empresa</h4> <input type="textfield"  name="Empresa_tf"/></br>
	<h4>Proveedor</h4> <input type="textfield"  name="Proveedor_tf"/></br>
	<input type="submit" value="consultar" name="boton_consultar"/>
</body>