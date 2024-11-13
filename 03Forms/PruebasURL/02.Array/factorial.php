<?php
    require_once("./functions.php");

    for($i=0;$i<=10;$i++){
        $factoriales[] = factorial($i);
    }

    //print_r($factoriales);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Factorial BBDD</title>
    </head>
    <body>
        <h1>Factoriales</h1>
        <?php
            foreach ($factoriales as $indice => $valor)
                echo '<p><a href="./verFactorial.php?n='.$indice.'&x='.$valor.'">'.$indice.'</a></p>';
        ?>
    </body>
</html>