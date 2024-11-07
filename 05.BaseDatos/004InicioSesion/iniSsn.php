<?php
    require_once("../conexion.php");

    $idntf = $_POST["identf"];
    $pswd = $_POST["password"];

    $consulta = "SELECT contrasena FROM usuario WHERE idUsuario = '".$idntf."' OR email = '".$pswd."';";
    //echo $consulta;

    $resultado = $mysqli->query($consulta);

    $fila = $resultado->fetch_assoc();
    if(!empty($fila["contrasena"]))
        $pswdBBDD = $fila["contrasena"];
    else
        echo "No estás Registarado";

    if($pswd === $pswdBBDD)
        echo "Inicio Sesión correctamente";
    else
        echo "Contraseña Incorrecta";
?>