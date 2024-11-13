<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>IMPAR</title>
    <link rel="stylesheet" href="./03styleImpar.css">
</head>
<body>
    <table>
        <tr>
            <th>número introducido</th>
            <th>cuadrado del número</th>
            <th>¿par o impar?</th>
        </tr>
        <tr>
            <?php
                echo "<td>".$_GET['n']."</td>";
                echo "<td>".$_GET['c']."</td>";
            ?>
            <td>par</td>
        </tr>
    </table>
</body>
</html>