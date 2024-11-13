<?php
    //aaaa-mm-dd -> dd/nombre_mes/aaaa
    //El mes tiene x días

    require_once "mes.php";

    $objMes = new Mes(); //Instanciar Objeto

    $date = $_GET["dateInput"]; //Recogemos la fecha del form

    echo $objMes->convertir_fecha($date);

    echo "El mes tiene ".$objMes->getDaysMes($date)." días";
?>