<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Factorial</title>
    </head>
    <body>
        <table>
            <th>TABLA DE FACTORIALES DEL 1 AL 10</th>
            <?php 
                for($num=10;$num>=0;$num--){
                    $factorial=$num;
                    if($num==0)
                        echo "<td><tr>$num</tr><tr>1</tr></td>";
                    else{
                        for($i=$num-1;$i>0;$i--)
                            $factorial*=$i;
                
                        echo "<td><h1>El factorial de $num es $factorial </h1></td>";
                    }
                }
            ?>
        </table>
    </body>
</html>