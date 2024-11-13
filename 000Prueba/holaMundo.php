<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hola Mundo</title>
    </head>
    <body>
        <?php $saludo='Hola';?>
        <h1><?php echo 'Página HTML '.$saludo;?></h1>
        <?php echo '<h1>Página HTML</h1>';?>
        <h1>Hola Mundo - DWES</h1>
        <h1><?php echo '$saludo'?></h1>
        <h1><?php echo "$saludo"?></h1>
        <?php echo "<h1>".$saludo."</h1>"?>
        <?php echo '<h1>'.$saludo.'</h1>'?>
        <h2><?php echo PHP_VERSION?></h2>
    </body>
</html>