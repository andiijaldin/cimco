<?php
$conexion = mysql_connect("sql309.epizy.com", "epiz_29351253", "rFcW4jl756");
mysql_select_db("epiz_29351253_dbcimco", $conexion);
mysql_query("SET NAMES 'utf8'");

$dato = $_POST ['dato'];
 

mysql_query("INSERT INTO `epiz_29351253_dbcimco`.`prueba` (`dato`, `fecha` ) VALUES ( '$dato', CURRENT_TIMESTAMP );");

mysql_close();

echo "Datos ingresados correctamente.";
?>