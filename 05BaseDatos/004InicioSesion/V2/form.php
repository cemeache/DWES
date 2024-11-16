<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio Sesión</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <h1>Inicio de Sesión</h1>
        <form action="./iniSsn.php" method="POST">
            <label>Nombre de usuario o email</label>
            <input type="text" name="identf">
            <label>Contraseña</label>
            <input type="password" name="password">
            <input type="reset" value="Borrar">
            <input type="submit" value="Iniciar Sesión">
        </form>
        <?php
            if (isset($mnsj)) {
                echo "<div>$mnsj</div>";
            }
        ?>
    </body>
</html>