<?php
    require_once("./conexion.php");

    $consulta = "INSERT INTO alumnos (nombre,apellidos,email,telefono) VALUES ('".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["email"]."','".$_POST["telefono"]."');";

    /*echo $consulta;*/

    $resultado = $mysqli->query($consulta);

    $mysqli->close();
?>