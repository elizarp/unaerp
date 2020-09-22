<?php

class Team {
    private $full_name;
    private $nick_name;
    private $ground;
    private $capacity;

    public function __construct(){
        $this->full_name = "";
        $this->capacity = 0;
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

$sao_paulo = new Team;
#$sao_paulo->setFullName("São Paulo");

//output
var_dump($sao_paulo);

