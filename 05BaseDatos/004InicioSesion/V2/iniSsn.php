<?php
    require_once("../conexion.php");

    $idntf = $mysqli->real_escape_string($_POST["identf"]);
    $pswd = $mysqli->real_escape_string($_POST["password"]);

    $consulta = "SELECT contrasena FROM usuario WHERE nombreUsu = '".$idntf."' OR email = '".$idntf."';";
    try {
        $resultado = $mysqli->query($consulta); 
        
        if (!$resultado) 
            throw new Exception("Error en la consulta: " . $mysqli->error);
        
        $fila = $resultado->fetch_assoc(); 
        
        if (empty($fila)) 
            throw new Exception("El usuario no está registrado"); 

        $hash_contrasena = $fila["contrasena"];

        if (password_verify($pswd, $hash_contrasena)) {
            $mnsj = "Inicio Sesión correctamente";
            require("./form.php");
        }else 
            throw new Exception("Contraseña Incorrecta");
            
    } catch (Exception $e) {
        $mnsj = $e->getMessage();
        require("./form.php");
    }
?>