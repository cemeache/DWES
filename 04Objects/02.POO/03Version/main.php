<?php
    //aaaa-mm-dd -> dd/nombre_mes/aaaa
    //El mes tiene x días

    require_once "mes.php";

    $objMes = new Mes($_GET["dateInput"]); //Instanciar Objeto

    echo $objMes->convertir_fecha();

    echo "El mes tiene ".$objMes->getDaysMes()." días";
?>