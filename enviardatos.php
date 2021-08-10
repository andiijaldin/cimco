<?php
$conexion = mysql_connect("db4free.net", "usuariocimco", "cimco123");
mysql_select_db("bddcimcomy", $conexion);
mysql_query("SET NAMES 'utf8'");

$dato = $_POST ['dato'];
 

mysql_query("INSERT INTO  `prueba` (`dato`, `fecha` ) VALUES ( '$dato', CURRENT_TIMESTAMP );");

mysql_close();

echo "Datos ingresados correctamente.";
?>
