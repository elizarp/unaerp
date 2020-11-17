<?php

# Proteção para nao deixar usuarios que nao estao logados acessarem o restante da pagina
if(!isset($_SESSION["estaLogado"])){
	header('Location: login.php');
	exit();
}

?>