<?php

session_start();

# validação em banco de dados pra verificar se existe o usuario
# $_POST["login"]
# $_POST["password"]
$_SESSION["estaLogado"] = "SIM";

?>

<a href="cadastro.php">Clique aqui para ir pro cadastro</a>