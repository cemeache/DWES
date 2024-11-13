<?php
	class Formato{
		public $longitud;
		
		function apellidoNombre(string $apellido = "", string $nombre = ""){
			$this->longitud = $this->numCaracteres($nombre.$apellido);
			return $apellido.', '.$nombre;
		}
		
		function nombreApellido(string $apellido = "", string $nombre = ""){
			$this->longitud = $this->numCaracteres($nombre.$apellido);
			return $nombre.' '.$apellido;
		}
		
		private function numCaracteres(string $cadena){
			return strlen($cadena);
		}
	}
?>