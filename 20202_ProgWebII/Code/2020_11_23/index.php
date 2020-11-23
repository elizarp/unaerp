<?php

require_once "Conexao.php";

$conexaoAlunos = Conexao::getConexao();

var_dump($conexaoAlunos);