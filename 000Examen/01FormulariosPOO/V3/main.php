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
	
	/*Si introducen al menos uno de los campos(apellido / nombre) y existe $formato 
	 se instancia el objeto y se ejecutan los métodos*/
	if(isset($apellido) && isset($nombre) && isset($formato)){
		/*Instanciamos el objeto*/
		$objFormato = new Formato($apellido,$nombre);	
		
		/*Comprobamos el formato con el cuál se mostrará el nombre*/
		if($formato == "Apellido, Nombre")
			$cadena = $objFormato->apellidoNombre();
		else
			$cadena = $objFormato->nombreApellido();
	
		/*Guardamos los resultados en variables*/
		$nombreComplt = "Nombre Completo: ".$cadena;
		$numCrt = "Longitud: ".$objFormato->numCaract;
		
		/*Incluimos el fichero que mostrará las variables que contienen los resultados*/
		require_once("./vista.php");
	}else
		echo "<p>Formulario Incompleto</p>";
	
	/*Comprobamos que existe $provincia*/
	if(isset($provincia))
		echo "<p>Provincia: ".$provincia."</p>";
	
?>