<?php
	class Formato{
		public $numCaract;
		private $nombre;
		private $apellido;
		
		public function __construct(string $apellido,string $nombre){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->numCaract = strlen($this->nombre)+strlen($this->apellido);
		}
		
		function apellidoNombre(){
			return $this->apellido.', '.$this->nombre;
		}
		
		function nombreApellido(){
			return $this->nombre.' '.$this->apellido;
		}
	}
?>