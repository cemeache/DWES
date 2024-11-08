<?php
    require_once("../conexion.php");

    $idntf = $_POST["identf"];
    $pswd = $_POST["password"];

    $consulta = "SELECT contrasena FROM usuario WHERE nombre = '".$idntf."' OR email = '".$idntf."';";
    //echo $consulta;
    //Si existe el usuario -> compruebo que coinciden las contraseñas
    try {
        $resultado = $mysqli->query($consulta);

        $fila = $resultado->fetch_assoc();

        if(empty($fila["contrasena"]))
            throw new Exception("El usuario no está registrado");
        $pswdBBDD = $fila["contrasena"];

        if($pswd === $pswdBBDD)
            $mnsj = "Inicio Sesión correctamente";
        else
            $mnsj = "Contraseña Incorrecta";

        require("./form.php");

    } catch (Exception $e) {
        $mnsj = $e->getMessage();
        require("./form.php");
    }
    
?>