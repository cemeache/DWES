<?php
	/*Incluimos la clase*/
	require_once("formato.php");
	
	/*Comprobar si los campos recogidos del form están creados o rellenos*/
	if(!empty($_POST["name"]))
		$nombre = $_POST["name"];
	else
		echo "<p>Nombre no relleno</p>";
	
	if(!empty($_POST["apellido"]))
		$apellido = $_POST["apellido"];
	else
		echo "<p>Apellido no relleno</p>";
	
	if(isset($_POST["provincia"]))
		$provincia = $_POST["provincia"];
	else
		echo "<p>Provincia no seleccionada</p>";
	
	if(isset($_POST["formato"]))
		$formato = $_POST["formato"];
	else
		echo "<p>Formato no indicado</p>";
	
	/*Si introducen al menos uno de los campos(apellido / nombre) y existe $formato 
	 se instancia el objeto y se ejecutan los métodos*/
	if(isset($apellido) && isset($nombre) && isset($formato)){
		/*Instanciamos el objeto*/
		$objFormato = new Formato($apellido,$nombre);	
		
		/*Comprobamos el formato con el cuál se mostrará eel nombre*/
		if($formato == "Apellido, Nombre")
			$cadena = $objFormato->apellidoNombre();
		else
			$cadena = $objFormato->nombreApellido();
	
		/*Mostramos los datos*/
		echo "<p>Nombre Completo: ".$cadena."</p>";
		echo "<p>Longitud: ".$objFormato->numCaract."</p>";
	}
	
	/*Comprobamos que existe $provincia*/
	if(isset($provincia))
		echo "<p>Provincia: ".$provincia."</p>";
	
?>