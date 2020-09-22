<?php

class Factorial {
    private $number;

    public function __construct($number){
        if(is_numeric($number)){
            $this->number = $number;
        }
    }

    private function calc_factorial($input){
        if($input == 1){
            return $input;
        } else{
            return $input * $this->calc_factorial($input - 1);
        }
    }

    public function result() {
        return "O resultado é " . $this->calc_factorial($this->number);
    }
    
    /*public function result(){
        $result = 1;
        for ($i=1; $i <= $this->number; $i++) { 
            $result *= $i;
        }
        return $result;
    }*/
}

$newfactorial = New Factorial(10);
echo $newfactorial->result();