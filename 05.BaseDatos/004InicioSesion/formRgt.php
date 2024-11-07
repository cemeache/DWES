<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrarse</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h1>Registrarse</h1>
        <form action="./registrarse.php" method="POST">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <label>Apellidos</label>
            <input type="text" name="apellidos">
            <label>Usuario</label>
            <input type="text" name="nombreUsu">
            <label>Correo Electrónico</label>
            <input type="text" name="email">
            <label>Contraseña</label>
            <input type="password" name="password">
            <label>Verificar Contraseña</label>
            <input type="password" name="passwordV2">
            <input type="reset" value="Borrar">
            <input type="submit" value="Registrarse">
        </form>
        <?php
            if (isset($mnsj)) {
                echo "<div>$mnsj</div>";
            }
        ?>
    </body>
</html>