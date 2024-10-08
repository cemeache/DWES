<?php
    $num = $_GET["number"];
    $cuadrado = $num;

    if(comprobarPar($cuadrado,$num))
        header("Location:./03par.php?n=$num&c=$cuadrado");
    else
        header("Location:./03impar.php?n=$num&c=$cuadrado");

    /*Devuelve un booleano dependiendo si es par[true] o impar[false] el número pasado por parámetros*/
    function comprobarPar(&$cuadrado,$num){
            $cuadrado *= $num;
            if ($num%2==0)
                return true;
            else
                return false;
    }    
?>