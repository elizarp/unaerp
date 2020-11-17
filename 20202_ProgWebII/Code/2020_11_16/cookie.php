<?php

if (isset($_COOKIE["meuCookie"])) {
	$valor = $_COOKIE["meuCookie"];
	echo "Já existe o cookie. O valor do cookie é ** $valor **";

} else {
	echo "Não existe o cookie, bora criar...";
	setcookie("meuCookie", "Algum valor", time() + 3600);
}

?>