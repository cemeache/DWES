<?php
    /*Cáculo de factorial*/
    function factorial($num){
        $factorial = 1;
        for($i = $num; $i > 1; $i--)
            $factorial *= $i;
        return $factorial;
    }
?>