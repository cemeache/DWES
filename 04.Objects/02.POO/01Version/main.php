<?php
    //aaaa-mm-dd -> dd/nombre_mes/aaaa
    //febrero tiene x días

    require_once "mes.php";

    $objMes = new Mes(); //Instanciar Objeto

    $date = $_GET["dateInput"]; //Recogemos la fecha del form

    //echo $date; //2024-10-28

    //Dividir la fecha en variables
    list($aaaa, $mm, $dd) = explode("-", $date);

    //Dividir la fecha en componentes
    //$dateArray = explode("-", $date);

    //print_r($dateArray); // Imprimir el array resultante

    echo "<br><br>".$dd."/".$objMes->getNameMes($mm)."/".$aaaa."<br><br>";

    $objMes->verificarFebrero($objMes->isBisiesto($aaaa));

    echo "Febrero tiene ".$objMes->getDaysMes(2)." días";
?>