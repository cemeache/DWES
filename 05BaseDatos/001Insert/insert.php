<?php
    require_once("./conexion.php");

    try{
        $consulta = "INSERT INTO alumnos (nombre,apellidos,email,telefono) VALUES ('".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["email"]."','".$_POST["telefono"]."');";

        /*Desactivar notificacion de error*/
        $controlador = new mysqli_driver();
        $controlador->report_mode = MYSQLI_REPORT_OFF;

        if($mysqli->query($consulta))
            echo "Registro realizado correctamente";
        else
            throw new Exception("Error al registrar: " . $mysqli->error .' '.$mysqli->errno);
        
        $mysqli->close();

    }catch(Exception $e){
        echo $e->getMessage();
    }
?>