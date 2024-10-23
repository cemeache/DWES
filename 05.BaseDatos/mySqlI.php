<?php

    require_once("./config.php");


    /*Conectarnos al servidor de bases de datos*/
    $mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

    /*Comprobar el error de la última conexión*/
	$mysqli->connect_errno;    //Devuelve el código del último error de conexión.
    $mysqli->connect_error ; //Devuelve una cadena con la descripción del último error de conexión.

    /*Realizar una consulta a la base de datos*/
    $consulta = "SELECT * FROM alumnos";
	$resultado = $mysqli->query($consulta);
    /*(Devuelve un objeto mysqli_result cuando es una consulta SELECT, 
    para otras consultas devuelve TRUE. En caso de error de cualquier 
    tipo de consulta, devuelve FALSE)*/

    $mysqli->connect_errno; //Devuelve el código del último error de conexión.
    $mysqli->connect_error; //Devuelve una cadena con la descripción del último error de conexión

    /*Extrae una fila del resultado de la consulta (método del objeto mysqli_result)*/
	$fila = $resultado ->fetch_array(); 
    
    /*Comprobar las filas que devuelve  la consulta (propiedad del objeto mysqli_result)*/
	$resultado ->num_rows;

    /*Cerrar la conexión establecida*/
	$mysqli->close();

    /*Devuelve el número de filas afectadas por la última consulta INSERT, UPDATE, REPLACE o DELETE. 
    $mysqli->affected_rows;*/  

    /*Realiza una consulta que incluye varias instrucciones sql:
    $mysqli->multi_query($consulta);*/
    
?>