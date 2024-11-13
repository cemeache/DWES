<?php
	class Formato{
		function numCaracteres(string $cadena){
			return strlen($cadena);
		}
		
		function apellidoNombre(string $apellido = "", string $nombre = ""){
			return $apellido.', '.$nombre;
		}
		
		function nombreApellido(string $apellido = "", string $nombre = ""){
			return $nombre.' '.$apellido;
		}
	}
?>