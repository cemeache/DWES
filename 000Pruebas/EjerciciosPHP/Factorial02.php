<!-- Celia Moruno Herrojo -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Factorial</title>
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
        <table>
            <thead>
                <tr>
                    <th colspan="2">TABLA DE FACTORIALES DEL 1 AL 10</th>
                </tr>
                <tr>
                    <th>Número</th>
                    <th>Factorial</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for($num=10; $num>0; $num--) {
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
        <?php
            function factorial($num){
                $factorial = 1;
                for($i = $num; $i > 1; $i--) {
                    $factorial *= $i;
                }
                return $factorial;
            }
        ?>
    </body>
</html>