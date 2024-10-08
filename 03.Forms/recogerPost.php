<?php

    $nombre = $_POST["nombre"];

    $password = $_POST["password"];
    
    if(isset($_POST["deportes"])) {   
        for($i = 0; $i < count($_POST["deportes"]); $i++)
            $deportes[] = $_POST["deportes"][$i];
    }   

    if(isset($_POST["curso"]))
        $curso = $_POST["curso"];
    
    $observaciones = $_POST["observaciones"];
    
    $ciclo = $_POST["ciclo"];

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