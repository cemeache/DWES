<!-- 
    Programa una página que guarde en un array los factoriales del 0 al 10. 
    Posteriormente se mostrarán en una tabla (html), los números y su factorial.

    Recursos: Página que calcula el factorial del 0 al 10. 

    -Guardar
    -Calcular
    -Mostrar
-->
<?php
    /*Asignar números a calcular
    for($i=0;$i<=10;$i++)
        $numeros[]=$i;*/
    
    //print_r($numeros); --> printear el array entero
    //var_dump($algo); --> muestra el tipo de elemento

    /*Incluir función para cáculo de factorial*/
    require_once("01Functions.php");
    
    //factorial($numeros[$i]);
    for($i=0;$i<=10;$i++)
        $factoriales[$i]=factorial($i)
        /*$factoriales[$i]=factorial($numeros[$i]);*/

    //print_r($factoriales);
        
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
                    for($i=0;$i<count($factoriales);$i++)
                        echo "<tr><td>".$i."</td><td>".$factoriales[$i]."</td></tr>";
                        /*echo "<tr><td>".$numeros[$i]."</td><td>".$factoriales[$i]."</td></tr>";*/
                ?>
        </tbody>
    </table>
</body>
</html>