<?php
    require_once("../conexion.php");

    // Recibir los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $nombreUsu = $_POST["nombreUsu"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordV2 = $_POST["passwordV2"];

    // Verificar que las contraseñas coincidan
    if ($password !== $passwordV2) {
        $mnsj = "ERROR | Las contraseñas no coinciden.";
        require_once("./formRgt.php");
    }

    $consulta = "INSERT INTO usuario (nombre, apellidos, nombreUsu, email, contrasena) VALUES ('".$nombre."', '".$apellidos."', '".$nombreUsu."', '".$email."', '".$password."')";

    try {
    // Ejecutar la consulta
    if ($mysqli->query($consulta))
        $mnsj = "Registro realizado correctamente.";
    else
        if ($mysqli->errno == 1062)
            $mnsj = "ERROR | El nombre de usuario o el correo electrónico ya están registrados.";
        else
            $mnsj = "ERROR | Ha ocurrido un error, no se pudo completar el registro";
} catch (Exception $e) {
    $mnsj = $e->getMessage();
}

// Cerrar la conexión
$mysqli->close();

// Incluir el formulario para mostrar el mensaje
require_once("./form.php");
?>