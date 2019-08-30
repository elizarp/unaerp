<?php

class Team {
    private $full_name;
    private $nick_name;
    private $ground;
    private $capacity;

    public function __construct($full_name, $nick_name, $ground, $capacity){
        if (is_string($full_name)){
            $this->full_name = $full_name;
        }

        if (is_string($nick_name)){
            $this->nick_name = $nick_name;
        }

        if (is_string($ground)){
            $this->ground = $ground;
        }

        if (is_numeric($capacity)){
            $this->capacity = $capacity;
        }
    }

    public function setFullName($value){
        if(is_string($value)){
            $this->full_name = $value;
        }
    }
    public function getFullName($value){
        return $this->full_name;
    }
}

$sao_paulo = new Team("São Paulo", "Tricolor", "Morumbi", 72000);
#$sao_paulo->setFullName("São Paulo");

//output
var_dump($sao_paulo);

