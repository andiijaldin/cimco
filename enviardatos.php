<?php
 

$mysqli = new mysqli('db4free.net', 'usuariocimco', 'cimco123', 'bddcimcomy');
$mysqli->set_charset("utf8");


    if(!$mysqli)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
        $dato = $_POST ['dato'];
       /* $var_resultado = $obj_conexion->query("INSERT INTO  `prueba` (`dato`, `fecha` ) VALUES ( '$dato', CURRENT_TIMESTAMP );");*/
       if( $mysqli->query("INSERT INTO  `prueba` (`dato`, `fecha` ) VALUES ( '$dato', CONVERT_TZ(NOW(), @@session.time_zone, '-04:00'));"))
       {

        echo "Datos ingresados correctamente.";
       }
       
    }
    

 
 
?>
