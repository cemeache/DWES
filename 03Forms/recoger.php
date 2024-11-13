<?php

    $nombre = $_GET["nombre"];

    $password = $_GET["password"];
    
    if(isset($_GET["deportes"])) {   
        for($i = 0; $i < count($_GET["deportes"]); $i++)
            $deportes[] = $_GET["deportes"][$i];
    }   

    if(isset($_GET["curso"]))
        $curso = $_GET["curso"];
    
    $observaciones = $_GET["observaciones"];
    
    $ciclo = $_GET["ciclo"];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recoger Form</title>
    </head>
    <body>
        <?php
            if(!empty($nombre))
                echo "<p>Nombre : ".$nombre."</p>";

            if(!empty($password))
                echo "<p>Contraseña : ".$password."</p>";

            if(isset($curso))
                echo "<p>Curso : ".$curso."</p>";

            if(!empty($observaciones))
                echo "<p>Observaciones : ".$observaciones."</p>";

            if(!empty($ciclo))
                echo "<p>Ciclo : ".$ciclo."</p>";

            if (isset($deportes)) {
                for ($i = 0; $i < count($deportes); $i++) {
                    echo "<p>Deporte $i : ".$deportes[$i]."</p>";
                }
            }
        ?>
    </body>
</html>