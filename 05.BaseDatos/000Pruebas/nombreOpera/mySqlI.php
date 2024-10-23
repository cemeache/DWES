<?php
    require_once("./config.php");

    /*Conectarnos al servidor de bases de datos*/
    $mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

    /*Realizar una consulta a la base de datos*/
    $consulta = "SELECT count(*) FROM alumnos";
	$resultado = $mysqli->query($consulta);

    /*Extrae una fila del resultado de la consulta (método del objeto mysqli_result)*/
	$fila = $resultado ->fetch_assoc(); 
    
    print_r($fila);
    echo "<hr>";
    var_dump($fila);
    

    /*Cerrar la conexión establecida*/
	$mysqli->close();
    
?>