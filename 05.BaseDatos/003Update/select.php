<?php
    require_once('../conexion.php');

    //Desactivar errores
	$controlador = new mysqli_driver();
    $controlador->report_mode = MYSQLI_REPORT_OFF;

    /*Consulta | Con la que recogeremos los datos especificados*/
    $consulta = "SELECT idAlum,nombre,apellidos FROM alumnos ORDER BY apellidos ASC";

    /*Ejecutar | Recoger la tabla alumno*/
    $resultado=$mysqli->query($consulta);

    /*Comprobar | Consulta exitosa o no*/
	if(!$resultado) {
		die('Error en la consulta: ' . $conexion->error);
	}

    /*Guardar | Guardamos los datos en arrays*/
	for($i=0;$fila=$resultado->fetch_assoc();$i++){
		$idAlumno[$i]=$fila["idAlum"];
		$nombre[$i]=$fila["nombre"];
		$apellidos[$i]=$fila["apellidos"];
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar datos</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h1>Selecciona el alumno a editar</h1>
        <form action="./update.php" method="POST">
           <select name="alumnos">
                <option selected disabled></option>
                <?php
                    for($i=0;$i<count($idAlumno);$i++)
                        echo '<option value="'.$idAlumno[$i].'">'.$apellidos[$i].' '.$nombre[$i].'</option>';
                ?>
           </select>
           <input type="reset" value="Borrar">
           <input type="submit" value="Enviar">
        </form>
    </body>
</html>