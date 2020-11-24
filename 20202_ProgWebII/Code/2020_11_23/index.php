<?php

require_once "Aluno.php";

$alunos = Aluno::retornaLista();

require_once "cabecalho.php";

?>
<div class="container">
	
	<a class="btn btn-md btn-success" href="criar.php">Criar novo Aluno</a>

	<table class="table table-striped table-hover table-responsive">
		<tr>
			<td>Nome Completo</td>
			<td>E-mail</td>
			<td>Data Cadastro</td>
			<td>Ações</td>
		</tr>
		<?php
		foreach ($alunos as $aluno) {
		?>
			<tr>
				<td><?php echo $aluno['nome'] . " " . $aluno['sobrenome'] ?></td>
				<td><?php echo $aluno['email'] ?></td>
				<td><?php echo $aluno['data_cadastro'] ?></td>
				<td>
					<a class="btn btn-sm btn-info" href="visualizar.php?id=<?php echo $aluno['id'] ?>">Visualizar</a><br />
					<a class="btn btn-sm btn-primary" href="editar.php?id=<?php echo $aluno['id'] ?>">Editar</a><br />
					<a class="btn btn-sm btn-danger" href="excluir.php?id=<?php echo $aluno['id'] ?>">Excluir</a><br />
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</div>

<?php
require_once "rodape.php";
?>