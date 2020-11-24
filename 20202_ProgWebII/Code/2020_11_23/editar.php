<?php

require_once "Conexao.php";

$id = $_REQUEST['id'];
$conexaoAluno = Conexao::getConexao();
$consulta = $conexaoAluno->query("SELECT id, nome, sobrenome, email, data_cadastro FROM myDB.Alunos WHERE id = $id;");
$aluno = $consulta->fetchAll()[0];

require_once "cabecalho.php";
?>

<script>
function validate(){
	if (!document.getElementById('nome').value){
		alert('Nome não preenchido!');
		return false;
	}

	if (!document.getElementById('sobrenome').value){
		alert('Sobrenome não preenchido!');
		return false;
	}

	return true;
}
</script>

<h1>Edição</h1>

<form method="POST" action="editarAction.php" onsubmit="return validate()">
	<label for="nome">Nome</label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?php echo $aluno['nome']?>">
	</div>

	<label for="nome">Sobrenome</label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id="sobrenome" value="<?php echo $aluno['sobrenome']?>">
	</div>

	<label for="nome">E-mail</label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="E-mail" name="email" id="email" value="<?php echo $aluno['email']?>">
	</div>
	<input type="hidden" name="id" value="<?php echo $aluno['id']?>"/>
	<button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php
require_once "rodape.php";
?>