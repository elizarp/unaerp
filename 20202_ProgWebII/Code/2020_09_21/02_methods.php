<?php

class Team {
    public $full_name;
    public $nick_name;
    public $ground;
    public $capacity;

    public function increase_capacity($seats){
        if( is_numeric($seats) AND $seats >= 0){
            $this->capacity += $seats;
        }
    }

    public function decrease_capacity($seats){
        if( is_numeric($seats) AND $seats >= 0){
            $this->capacity -= $seats;
        }
    }
}

$sao_paulo = new Team;
$sao_paulo->full_name = "São Paulo";
$sao_paulo->nick_name = "Tricolor";
$sao_paulo->ground = "Morumbi";
$sao_paulo->capacity = 72000; 

//output
var_dump($sao_paulo);
$sao_paulo->increase_capacity(1000);
var_dump($sao_paulo);

