<?php
    private $meses;
    private $dd;
    private $mm;
    private $aaaa;

    public function __construct(string $date = "0000-00-00") {
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
        list($this->aaaa, $this->mm, $this->dd) = explode("-", $date);
        $this->mm = number($this->mm);
        if($this->isBisiesto($this->aaaa))
            $this->meses[$this->mm]["dias"]=29;
    }

    public function isBisiesto(int $anio){
        if(($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0)
            return true;
        return false;
    }
?>