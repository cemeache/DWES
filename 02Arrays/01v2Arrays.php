<?php
    /*Incluir función para cáculo de factorial*/
    require_once("01Functions.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
    <link rel="stylesheet" href="./01Style.css">
</head>
<body>
    <table>
        <thead>
            <tr><th colspan="2">CÁLCULO DE FACTORIAL</th></tr>
            <tr>
                <th>NÚMERO</th>
                <th>FACTORIAL</th>
            </tr>
        </thead>
        <tbody>
                <?php     
                    /*Guardar en array los factoriales [0-10]*/
                    for($i=0;$i<=10;$i++)
                        $factoriales[$i]=factorial($i);

                    /*Mostrar factoriales en formato tabla*/
                    for($i=0;$i<count($factoriales);$i++)
                        echo "<tr><td>".$i."</td><td>".$factoriales[$i]."</td></tr>";
                ?>
        </tbody>
    </table>
</body>
</html>