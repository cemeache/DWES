<?php
    $alumUpdate = $_POST["alumnoEdit"];

    require_once("../conexion.php");

    $consulta = "SELECT nombre,apellidos,email,telefono FROM alumnos WHERE idAlum='".$alumUpdate."'";

    $resultado = $mysqli->query($consulta);

    for($i=0;$fila=$resultado->fetch_assoc();$i++){
		$nombre[$i]=$fila["nombre"];
		$apellidos[$i]=$fila["apellidos"];
		$email[$i]=$fila["email"];
		$telefono[$i]=$fila["telefono"];
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar Datos</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h1>Identifica al alumno que deseas borrar</h1>
        <form action="./update.php" method="POST">
            <?php
                echo '<input type="text" hidden name="idAlum" value="'.$alumUpdate.'"';
            ?>
            <label for="text">Nombre:</label>
            <?php
                echo '<input type="text" name="nombre" value="'.$nombre[0].'"><br><br>'
            ?>
            <label for="text">Apellidos:</label>
            <?php
                echo '<input type="text" name="apellidos" value="'.$apellidos[0].'"><br><br>';
            ?>
            <label for="text">Email:</label>
            <?php
                echo '<input type="email" name="email" value="'.$email[0].'"><br><br>';
            ?>
            <label for="text">Teléfono:</label>
            <?php
                echo '<input type="text" name="telefono" value="'.$telefono[0].'"><br><br>';
            ?>
            <input type="reset" value="Borrar">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>