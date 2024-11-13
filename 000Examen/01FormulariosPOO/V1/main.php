<?php
	/*Incluimos la clase*/
	require_once("formato.php");
	
	/*Comprobar si los campos recogidos del form están creados o rellenos*/
	if(!empty($_POST["name"]))
		$nombre = $_POST["name"];
	
	if(!empty($_POST["apellido"]))
		$apellido = $_POST["apellido"];
	
	if(isset($_POST["provincia"]))
		$provincia = $_POST["provincia"];
	
	if(isset($_POST["formato"]))
		$formato = $_POST["formato"];
	
	/*Instanciamos el objeto*/
	$objFormato = new Formato();
	
	/*Si introducen al menos uno de los campos(apellido / nombre) y existe $formato ejecuta los métodos*/
	if(isset($apellido) && isset($nombre) && isset($formato)){
		if($formato == "Apellido, Nombre")
		$cadena = $objFormato->apellidoNombre($apellido,$nombre);
	else
		$cadena = $objFormato->nombreApellido($apellido,$nombre);
	
	echo "<p>Nombre Completo: ".$cadena."</p>";
	echo "<p>Longitud: ".$objFormato->numCaracteres($cadena)."</p>";
	}else
		echo "<p>Formulario Incompleto</p>";
	
	/*Comprobamos que existe $provincia*/
	if(isset($provincia))
		echo "<p>Provincia: ".$provincia."</p>";
	
?>