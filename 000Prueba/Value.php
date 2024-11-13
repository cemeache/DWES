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
            $text = $_GET['text'];
            echo "<p>".$text."</p>"
        ?>
    </body>
</html>