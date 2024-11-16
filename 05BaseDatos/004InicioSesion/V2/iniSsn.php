<?php
    require_once("../conexion.php");

    $idntf = $_POST["identf"];
    $pswd = $_POST["password"];

    $consulta = "SELECT idUsuario FROM usuario WHERE nombreUsu = '".$idntf."' OR email = '".$idntf."';";
    try {
        $resultado = $mysqli->query($consulta);

        $fila = $resultado->fetch_assoc();

        if(empty($fila["idUsuario"]))
            throw new Exception("El usuario no está registrado");
        $idUsuario = $fila["idUsuario"];

        try {
            $consulta = "SELECT contrasena FROM usuario WHERE idUsuario = '".$idUsuario."';";

            $resultado = $mysqli->query($consulta);

            $fila = $resultado->fetch_assoc();

            if($pswd === $fila["contrasena"]){
                $mnsj = "Inicio Sesión correctamente";
                require("./form.php");
            }
            else
                throw new Exception("Contraseña Incorrecta");
        } catch (Exception $e) {
            $mnsj = $e->getMessage();
            require("./form.php");
        }

    } catch (Exception $e) {
        $mnsj = $e->getMessage();
        require("./form.php");
    }
    
?>