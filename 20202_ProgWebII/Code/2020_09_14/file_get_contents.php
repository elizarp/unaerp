<?php


$content = file_get_contents('template.html');

$content = str_replace("{nomeCliente}","Eliezer",$content);
$content = str_replace("{enderecoCliente}","Rua das Couves",$content);
echo $content;