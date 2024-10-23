<?php
    require_once("./config.php");

    /*Conectarnos al servidor de bases de datos*/
    $mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

    /*Realizar una consulta a la base de datos*/
    $consulta = "SELECT * FROM alumnos";
	$resultado = $mysqli->query($consulta);

    /*Extrae una fila del resultado de la consulta (método del objeto mysqli_result)*/
	$fila = $resultado ->fetch_array(); 
    
    while($fila = $resultado ->fetch_array()){
        foreach($fila as $indice => $valor){
            echo $indice;
            echo " -- ";
            echo $valor;
            echo "<br>";
        }
        echo "<hr>";
    }
    

    /*Cerrar la conexión establecida*/
	$mysqli->close();
    
?>