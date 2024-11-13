<?php
    $flores = array(
        "clavel" => "./02img/clavel.jpg",
        "margarita" => "./02img/margarita.jpg",
        "petunia" => "./02img/petunia.jpg"
    );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./02style.css">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($flores as $flor => $img)
            echo "<figure><img src='".$img."'><figcaption>".$flor."</figcaption></figure>";
    ?>
</body>
</html>