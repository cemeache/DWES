<?php
    require_once "mes.php";

    $objMes = new Mes();

    echo $objMes->convertir_fecha($_GET["dateInput"]);

    echo "<br>El mes tiene ".$objMes->numDias." días";
?>