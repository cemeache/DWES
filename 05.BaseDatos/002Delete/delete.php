<?php

    require_once("../conexion.php");

    /*Creamos dos arrays | Condicion --> Guarda name campos bbdd || Parametro --> Guarda dato corresp*/
    /*Las condiciones se igualan al signo ? que hace como referencia a los parámetros para luego porder sustituirlo*/
    if(!empty($_POST["nombre"])) {$condicion[] = "nombre = ?"; $parametro[] = $_POST["nombre"];}
    if(!empty($_POST["apellidos"])) {$condicion[] = "apellidos = ?"; $parametro[] = $_POST["apellidos"];}
    if(!empty($_POST["email"])) {$condicion[] = "email = ?"; $parametro[] = $_POST["email"];}
    if(!empty($_POST["telefono"])) {$condicion[] = "telefono = ?"; $parametro[] = $_POST["telefono"];}


    if (!empty($condicion)) {
        /*Creamos la consulta SQL con ayuda de 'implode' que anidará las condiciones y las separará por 'AND'*/
        $consulta = "DELETE FROM alumnos WHERE " . implode(" AND ", $condicion) . ";";
        
        /*El método prepare se utiliza para preparar la consulta || Devuelve un obj mysqli_stmt [Declaración preparada] OR false*/
        $stmt = $mysqli->prepare($consulta);
    
        if ($stmt) {
            /*bind_param --> enlaza los parámetros a la consulta preparada*/
            /*str_repeat('s',count($parametro)) --> cadena que contiene tantas 's'[s-string] como elementos en el array*/
            /*...$parametro --> transforma el array en una lista de argumentos la cual se pasa a bind_param*/
            /*Todo esto sería como hacer lo siguiente:
                $stmt->bind_param('sss',$parametro[0],$parametro[1],$parametro[2]);  
                Pero como no sabemos cuántos parámetros vamos a tener rellenos utilizamos la forma anterior para poder
                    hacerlo de manera dinámica.  
            */
            $stmt->bind_param(str_repeat('s', count($parametro)), ...$parametro);
            $stmt->execute();
            echo "Han sido afectadas ".$mysqli->affected_rows." filas";
            $stmt->close();
        }else
            echo "Error al preparar la consulta" . $mysqli->error;
    
    } else
        echo "No existen datos para realizar el borrado";

    $mysqli->close();
?>