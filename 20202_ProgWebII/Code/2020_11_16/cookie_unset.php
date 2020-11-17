<?php

#unset($_COOKIE["meuCookie"]);
echo "Cookie meuCookie excluido";

setcookie("meuCookie", "Algum valor", time() - 1);

?>