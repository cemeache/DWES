<?php
    require_once("./conexion.php");

    $consulta = "INSERT INTO alumnos (nombre,apellidos,email,telefono) VALUES ('".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["email"]."','".$_POST["telefono"]."');";

    /*echo $consulta;*/

    if ($mysqli->query($consulta)) {
        echo "Registro realizado correctamente";
    } else {
        echo "Error al registrar: " . $mysqli->error;
    }

    $mysqli->close();
?>