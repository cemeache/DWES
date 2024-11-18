<?php
    require_once("../conexion.php");

    // Recibir los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $nombreUsu = $_POST["nombreUsu"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordV2 = $_POST["passwordV2"];

    try {
        // Verificar que las contraseñas coincidan
        if ($password != $passwordV2) 
            throw new Exception("ERROR | Las contraseñas no coinciden");

        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        echo "Password hash: " . $password_hash . "<br>"; // Depuración de hash

        $consulta = "INSERT INTO usuario (nombre, apellidos, nombreUsu, email, contrasena) VALUES ('".$nombre."', '".$apellidos."', '".$nombreUsu."', '".$email."', '".$password_hash."')";
    
        
        // Ejecutar la consulta
        if ($mysqli->query($consulta))
            $mnsj = "Registro realizado correctamente.";
        else 
            if ($mysqli->errno == 1062)
                $mnsj = "ERROR | El nombre de usuario o el correo electrónico ya están registrados.";
            else
                $mnsj = "ERROR | Ha ocurrido un error, no se pudo completar el registro";
        
        
        // Incluir el formulario para mostrar el mensaje
        require_once("./form.php"); 
    
    } catch (Exception $e) {
        $mnsj = $e->getMessage();
        require_once("./formRgt.php");
    }
    
    // Cerrar la conexión
    $mysqli->close();
?>