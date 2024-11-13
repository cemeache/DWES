<?php
    require_once("./operar.php");

    $objOperar = new Operar($_GET["num1"],$_GET["num2"]);

    $sig = $_GET["sig"];

    switch($sig){
        case '+':
            echo ($objOperar->sumar());
            break;
        case '-':
            echo ($objOperar->restar());
            break;
        case '*':
            echo ($objOperar->multiplicar());
            break;
        case '/':
            echo ($objOperar->dividir());
            break;
        default:
            echo "ERROR";
    }
?>