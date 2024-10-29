<?php
    require_once("./conexion.php");

    
        $consulta = "INSERT INTO alumnos (nombre,apellidos,email,telefono) VALUES ('".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["email"]."','".$_POST["telefono"]."');";

        /*Desactivar notificacion de error*/
        $controlador = new mysqli_driver();
        $controlador->report_mode = MYSQLI_REPORT_OFF;

        /*Comprobar el error de la última conexión
	    $mysqli->connect_errno; //num error
        $mysqli->connect_error; //texto error*/

        /*echo $consulta;*/

        if($mysqli->query($consulta))
            echo "Registro realizado correctamente";
        else
            echo "Fallo en el registro";
       
        $mysqli->close();
    
?>
