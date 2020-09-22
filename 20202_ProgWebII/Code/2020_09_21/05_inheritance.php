<?php

class Veiculo{
    private $comprimento;
    private $velocidade;

    public function getComprimento(){
        return $this->comprimento;
    }

    public function liga(){
        $this->velocidade = 1;
    }
}

class Automovel extends Veiculo{
    private $qtde_rodas;
    
}

class Barco extends Veiculo{
    private $leme_funcionando;
}

$meu_automovel = New Automovel;
$meu_automovel->liga();
var_dump($meu_automovel);

$meu_barco = New Barco;
var_dump($meu_barco);