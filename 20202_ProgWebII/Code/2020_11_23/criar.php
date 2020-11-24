<?php

require_once "Conexao.php";

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

<h1>Criar novo Aluno</h1>

<form method="POST" action="criarAction.php" onsubmit="return validate()">
	<label for="nome">Nome</label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="">
	</div>

	<label for="nome">Sobrenome</label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id="sobrenome" value="">
	</div>

	<label for="nome">E-mail</label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="E-mail" name="email" id="email" value="">
	</div>

	<button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php
require_once "rodape.php";
?>