<?php
    if(!empty($_POST["text"]))
        $text = $_POST["text"];

    if(isset($_POST["asig"]))
        $asig = $_POST["asig"];

    if(isset($_POST["alumnos"]))
        $alumnos = $_POST["alumnos"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
        <?php
            if(isset($text))
                echo "<p>".$text."</p><br>";
            if(isset($asig))
                echo "<p>".$asig."</p><br>";
            if(isset($alumnos))
                for($i=0;$i < count($alumnos); $i++)
                    echo "<p>".$alumnos[$i]."</p><br>";
        ?>
</body>
</html>