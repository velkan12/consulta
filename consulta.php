<?php
	include "conexion.php";

	echo "string";
	$fp= fopen($nombreTemArchivo, 'r');
	$p_empresa= $_POST['Empresa_tf'];
	$p_proveedor= $_POST['Proveedor_tf'];

 	$consulta= "SELECT * FROM Facturas where Empresa ='$p_empresa'";
 	$resultado=mysql_query($consulta);

    while ($resEmp = mysql_fetch_assoc($resultado)) {
       echo $resEmp['Empresa']." ".$resEmp['Cod_Proveedor']." ".$resEmp['Proveedor']." ".$resEmp['Clasificacion']." ".$resEmp['Tipo_Compr']." ".$resEmp['Nro_Compr']." ".$resEmp[' Descripcion_Campr']." ".$resEmp['Fecha_Compr']." ".$resEmp['Moneda']." ".$resEmp['Importe_Compr']." ".$resEmp['Tipo_cambio']." ".$resEmp['Importe_Func']." ".$resEmp['Fecha_Creacion']." ".$resEmp['Primer_Aprobador']." ".$resEmp['Estado_Aprobacion']." ".$resEmp['Fecha_Aprobacion']." ".$resEmp['Estado_Validacion']." ".$resEmp['Retencion']." ".$resEmp['Descripcion_Ret']." ".$resEmp['Contabilizado']." ".$resEmp['Pagado']." ".$resEmp['Grupo']." ".$resEmp['Metodo']." ".$resEmp['Prioridad']." ".$resEmp['Cuenta_Bancaria']." ".$resEmp['Vencimiento']." ".$resEmp['Retenido_Pago']." ".$resEmp[' Num']." ".$resEmp['Nom']." ".$resEmp['Fecha_OC']." ".$resEmp['Fecha_Sol']." ".$resEmp['ESaldo']."<br>";
    }



                                                                                                                                      

?>

