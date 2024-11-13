<!-- Celia Moruno Herrojo -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            table {
                width: 50%;
                border-collapse: collapse;
                margin: 20px auto;
            }
            th, td {
                border: 1px solid #000;
                padding: 10px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <?php
            require './functions.php';
        ?>
        <table>
            <thead>
                <?php
                    $min = $_GET['num1'];
                    $max = $_GET['num2'];
                    echo "<tr><th colspan='2'>TABLA DE FACTORIALES DEL $min AL $max</th></tr>";
                ?>
                <tr>
                    <th>Número</th>
                    <th>Factorial</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for($num=$min; $num<=$max; $num++) {
                        echo "<tr><td>$num</td><td>".factorial($num)."</td></tr>";
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Celia Moruno Herrojo</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>