<?php
	/*Incluimos la clase*/
	require_once("formato.php");

	/*Instanciamos el objeto*/
	$objFormato = new Formato();
	
	/*Si introducen al menos uno de los campos(apellido / nombre) y existe $formato ejecuta los métodos*/
	if(isset($_POST["apellido"]) && isset($_POST["name"]) && isset($_POST["formato"])){
		if($formato == "Apellido, Nombre")
			$cadena = $objFormato->apellidoNombre($apellido,$nombre);
		else
			$cadena = $objFormato->nombreApellido($apellido,$nombre);
	
		echo "<p>Nombre Completo: ".$cadena."</p>";
		echo "<p>Longitud: ".$objFormato->longitud."</p>";
	}else
		echo "<p>Formulario Incompleto</p>";
	
	/*Comprobamos que existe $provincia*/
	if(isset($_POST["provincia"]))
		echo "<p>Provincia: ".$provincia."</p>";
	else
		echo "<p>Provincia no seleccionada</p>";
	
?>