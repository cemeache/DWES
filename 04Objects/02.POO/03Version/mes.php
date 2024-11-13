<?php
    class Mes{
        private $meses;
        private $dia;
        private $mes;
        private $anio;
        
        public function __construct(string $date = "0000-00-00"){
            $this->meses = [
                1 => ["nombre" => "Enero", "dias" => 31],
                2 => ["nombre" => "Febrero", "dias" => 28],
                3 => ["nombre" => "Marzo", "dias" => 31],
                4 => ["nombre" => "Abril", "dias" => 30],
                5 => ["nombre" => "Mayo", "dias" => 31],
                6 => ["nombre" => "Junio", "dias" => 30],
                7 => ["nombre" => "Julio", "dias" => 31],
                8 => ["nombre" => "Agosto", "dias" => 31],
                9 => ["nombre" => "Septiembre", "dias" => 30],
                10 => ["nombre" => "Octubre", "dias" => 31],
                11 => ["nombre" => "Noviembre", "dias" => 30],
                12 => ["nombre" => "Diciembre", "dias" => 31]
            ];

            list($this->anio, $this->mes, $this->dia) = explode("-", $date);
            $this->mes = intval($this->mes);

            $this->verificarFebrero($this->isBisiesto($this->anio));
        }
        
        public function convertir_fecha(){
            return $this->dia."/".$this->meses[$this->mes]["nombre"]."/".$this->anio."<br><br>";
        }

        public function getDaysMes(){
            return $this->meses[$this->mes]["dias"];
        }

        public function isBisiesto(int $aaaa){
            if(($this->anio % 4 == 0 && $this->anio % 100 != 0) || $this->anio % 400 == 0)
                return true;
            return false;
        }
        
        public function verificarFebrero(bool $isBisi){
            if($isBisi)
                $this->meses[2]["dias"]=29;
        }
    }   
?>
