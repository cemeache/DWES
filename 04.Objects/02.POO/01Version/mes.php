<?php
    class Mes{
        private $meses;
        
        public function __construct(){
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
        }
        
        public function isBisiesto(int $aaaa){
            if(($aaaa % 4 == 0 && $aaaa % 100 != 0) || $aaaa % 400 == 0)
                return true;
            return false;
        }
        
        public function verificarFebrero(bool $isBisi){
            if($isBisi)
                $this->meses[2]["dias"]=29;
            else    
                $this->meses[2]["dias"]=28;
        }

        public function getNameMes(int $mes){
            return $this->meses[$mes]["nombre"];
        }

        public function getDaysMes(int $mes){
            return $this->meses[$mes]["dias"];
        }

    }   
?>
