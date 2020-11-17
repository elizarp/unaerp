<?php

#session_start();

# $minhaVariavel = $_SESSION["minhaSessao"];

#$_SESSION["minhaSessao"] = "123456";
#$_SESSION["meuTime"] = "Sao Paulo";
#$_SESSION["login"] = "eliezer.zarpelao";

session_destroy();
var_dump($_SESSION);
#session_unset();

?>