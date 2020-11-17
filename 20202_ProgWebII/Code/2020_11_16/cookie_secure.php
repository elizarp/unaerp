<?php

if (isset($_COOKIE["meuCookieHTTPS"])) {
	$valor = $_COOKIE["meuCookieHTTPS"];
	echo "Já existe o cookie. O valor do cookie é ** $valor **";
} else {
	echo "Não existe o cookie, bora criar...";
	setcookie("meuCookieHTTPS", "Algum valor", time() + 3600, null, null, true);
}
