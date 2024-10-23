<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Introducir Datos</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <form action="./insert.php" method="POST">
            <label for="text">Nombre:</label>
            <input type="text" name="nombre"><br><br>
            <label for="text">Apellidos:</label>
            <input type="text" name="apellidos" ><br><br>
            <label for="text">Email:</label>
            <input type="email" name="email"><br><br>
            <label for="text">Teléfono:</label>
            <input type="text" name="telefono"><br><br>
            <input type="reset" value="Borrar">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>