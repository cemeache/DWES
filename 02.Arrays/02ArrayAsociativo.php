<?php
    $enlacesImgs = array("margarita"=>"margarita.jpg",
    "clavel"=>"clavel.jpg",
    "petunia"=>"petunia.jpg");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Flores</title>
        <link rel="stylesheet" href="./02style.css">
    </head>
    <body>
        <?php
            foreach ($enlacesImgs as $nombre => $enlace)
                echo "<figure><img src='./02Img/".$enlace."'><figcaption>".$nombre."</figcaption></figure>";
        ?>
    </body>
</html>