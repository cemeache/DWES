<?php
    require_once("../conexion.php");
    
    if(isset($_POST["alumnoEdit"])){
        $alumUpdate = $_POST["alumnoEdit"];
        $consulta = "SELECT nombre,apellidos,email,telefono FROM alumnos WHERE idAlum='".$alumUpdate."'";

        $resultado = $mysqli->query($consulta);

        $fila = $resultado->fetch_assoc();
        $nombre = $fila["nombre"];
        $apellidos = $fila["apellidos"];
        $email = $fila["email"];
        $telefono = $fila["telefono"];
    }else
        $alumUpdate = $idAlum;
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
                echo '<input type="text" name="nombre" value="'.$nombre.'"><br><br>'
            ?>
            <label for="text">Apellidos:</label>
            <?php
                echo '<input type="text" name="apellidos" value="'.$apellidos.'"><br><br>';
            ?>
            <label for="text">Email:</label>
            <?php
                echo '<input type="email" name="email" value="'.$email.'"><br><br>';
            ?>
            <label for="text">Teléfono:</label>
            <?php
                echo '<input type="text" name="telefono" value="'.$telefono.'"><br><br>';
            ?>
            <input type="reset" value="Valores Anteriores">
            <input type="submit" value="Enviar">
            <button type="button" onclick="window.location.href='./select.php'">Volver</button>
        </form>
        <?php
            if (isset($mnsj)) {
                echo "<div>$mnsj</div>";
            }
        ?>
    </body>
</html>