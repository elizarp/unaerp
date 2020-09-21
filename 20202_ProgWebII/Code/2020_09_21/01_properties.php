<?php

class Team {
    public $full_name;
    public $nick_name;
    public $ground;
    public $capacity;
}

$sao_paulo = new Team;
$sao_paulo->full_name = "São Paulo";
$sao_paulo->nick_name = "Tricolor";
$sao_paulo->ground = "Morumbi";
$sao_paulo->capacity = 72000; 
#setenta e duas mil pessoas

$santos = new Team;
$santos->full_name = "Santos FC";
$santos->nick_name = "Peixe";
$santos->ground = "Vila Belmiro";
$santos->capacity = 16068; 

//output
var_dump($sao_paulo);
var_dump($santos);
