<?php
    if($_GET["number"] % 2 == 0)
        header("Location:./02Par.php?numPar=$_GET['number']&tp='par'");
    else
        header("Location:./02Impar.php?numImpar=$_GET['number']&tp='impar'");    
?>