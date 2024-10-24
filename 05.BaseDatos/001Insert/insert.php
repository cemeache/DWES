<?php
    require_once("./conexion.php");

    try{
        $consulta = "INSERT INTO alumnos (nombre,apellidos,email,telefono) VALUES ('".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["email"]."','".$_POST["telefono"]."');";

        /*echo $consulta;*/

        if($mysqli->query($consulta))
            echo "Registro realizado correctamente";
        else
            throw new Exception("Error al registrar: " . $mysqli->error);
        
        $mysqli->close();

    }catch(Exception $e){
        echo $e->getMessage();
    }
?>