<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
</head>
<body>
    <?php
        echo "<b>Contenido: </b>";
        print_r($_GET["deportes"]);
        echo "<br/><br/>";
        echo "<b>Tipo de variable: </b>";
        var_dump($_GET["deportes"]);
    ?>
</body>
</html>