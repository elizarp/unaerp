<?php

class Conta{
	private $saldo = 0;

	public function sacar($valor) {
		$this->saldo = $this->saldo - $valor;
		$this->enviaSMS();
	}

	public function depositar($valor) {
		$this->saldo = $this->saldo + $valor;
	}

	public function saldo() {
		return $this->saldo;
	}

	private function enviaSMS(){
		echo "Enviou SMS \n";
	}
}

class ContaPF extends Conta{
	private $cpf = "";	
}

class ContaPJ extends Conta {
	private $cnpj = "";
}

class ContaEstudante extends Conta {
	private $ra = "";
}

$contaPF = new ContaPF();
$contaPF->sacar(100);

$contaZuada = new Conta();


