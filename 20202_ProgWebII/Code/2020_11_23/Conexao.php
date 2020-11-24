<?php

class Conexao
{

	private static $conexao;

	private function __construct()
	{
	}

	public static function getConexao()
	{

		$pdoConfig = "mysql:Server=127.0.0.1;Database=myDB;";

		try {
			// Verifica se a conexao já está criada
			if (!isset($conexao)) {
				$conexao = new PDO($pdoConfig, "newuser", 'p@$$w0rd');
				$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			return $conexao;
		} catch (PDOException $e) {
			$mensagemErro = $e->getMessage();
			header('Location: erro.php');
			exit();
			#throw new Exception($mensagemErro);
		}
	}
}
