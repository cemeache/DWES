<?php
    class Operar{

        private $my;
        private $mn;

        public function __construct(int $n1 = 0, int $n2 = 0) {
            if($n1 <= $n2){
                $this->my=$n2;
                $this->mn=$n1;
            }else{
                $this->my=$n1;
                $this->mn=$n2;
            }
        }

        public function sumar(){
            return $this->my + $this->mn;
        }

        public function restar(){
            return $this->my - $this->mn;
        }

        public function dividir(){
            return $this->my / $this->mn;
        }

        public function multiplicar(){
            return $this->my * $this->mn;
        }

    }
?>