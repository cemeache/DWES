<?php

    require_once("../config.php");

    /*Conectarnos al servidor de bases de datos*/
    $mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

    /*Comprobar el error de la última conexión*/
	$mysqli->connect_errno;
    $mysqli->connect_error ;

    /*Realizar una consulta a la base de datos*/
    $consulta = "SELECT nombre,email FROM alumnos";
	$resultado = $mysqli->query($consulta);

    $mysqli->connect_errno; 
    $mysqli->connect_error;
    
    while($fila=$resultado->fetch_array()){
		echo $fila["nombre"];
        echo "  ";
		echo $fila["email"];
	}	

    /*Cerrar la conexión establecida*/
	$mysqli->close();
    
?>