<?php

class Veiculo{
    private $comprimento;

    public function getComprimento(){
        return $this->comprimento;
    }
}

class Automovel extends Veiculo{
    private $qtde_rodas;
}

class Barco extends Veiculo{
    private $leme_funcionando;
}

$meu_automovel = New Automovel;
var_dump($meu_automovel);

$meu_barco = New Barco;
var_dump($meu_barco);