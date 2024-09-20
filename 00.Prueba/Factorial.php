<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
    <?php 
        for($num=7;$num>=0;$num--){
            $factorial=$num;
            if($num==0)
                echo "<h1>El factorial de $num es 1 </h1>";
            else{
                for($i=$num-1;$i>0;$i--)
                    $factorial*=$i;
        
                echo "<h1>El factorial de $num es $factorial </h1>";
            }
        }
    ?>
</body>
</html>