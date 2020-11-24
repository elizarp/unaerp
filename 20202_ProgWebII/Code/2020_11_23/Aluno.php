<?php

require_once "Conexao.php";

class Aluno{
	public static function retornaLista(){
		$conexaoAlunos = Conexao::getConexao();
		$consulta = $conexaoAlunos->query("SELECT id, nome, sobrenome, email, data_cadastro FROM myDB.Alunos;");
		$alunos = $consulta->fetchAll();
		return $alunos;
	}
}

?>