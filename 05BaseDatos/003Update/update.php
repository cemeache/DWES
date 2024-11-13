<?php
    require_once('../conexion.php');
    
    $idAlum=$_POST["idAlum"];
    $nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$email=$_POST["email"];
	$telefono=$_POST["telefono"];

    $consulta = "UPDATE alumnos SET telefono='".$telefono."', email='".$email."', nombre='".$nombre."', apellidos='".$apellidos."' WHERE idAlum='".$idAlum."'";
    try {
        if($mysqli->query($consulta))
            $mnsj = "La actualización de datos se realizó correctamente";
        else
            if ($mysqli->errno == 1062)
                throw new Exception("ERROR | El correo electrónico '$email' ya está registrado.");
            else
                throw new Exception("ERROR | Ha ocurrido un error, no se pudo completar la actualización de datos: " . $mysqli->error);
    } catch (Exception $e){
        $mnsj = $e->getMessage();
    }
        
    
    require_once("./form.php");

?>