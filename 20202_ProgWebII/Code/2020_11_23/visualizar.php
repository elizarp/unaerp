<?php

require_once "Conexao.php";

$id = $_REQUEST['id'];
$conexaoAluno = Conexao::getConexao();
$consulta = $conexaoAluno->query("SELECT id, nome, sobrenome, email, data_cadastro FROM myDB.Alunos WHERE id = $id;");
$aluno = $consulta->fetchAll()[0];

require_once "cabecalho.php";
?>
<h1>Visualização</h1>
<dl>
	<dt>Nome Completo</dt>
	<dd><?php echo $aluno['nome'] . " " . $aluno['sobrenome']?></dd>

	<dt>E-mail</dt>
	<dd><?php echo $aluno['email']?></dd>

	<dt>Data de Cadastro</dt>
	<dd><?php echo $aluno['data_cadastro']?></dd>
</dl>

<?php
require_once "rodape.php";
?>