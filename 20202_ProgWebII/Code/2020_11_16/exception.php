<?php



try{
	throw new Exception("Testando");
	echo "Teste <br/>";
} catch(Exception $excecao){

	$arquivo = $excecao->getFile();
	$linha = $excecao->getLine();
	echo "Deu um problema na linha $linha do arquivo $arquivo...<br/>";
	# var_dump($excecao);
}

echo "Outros comandos....";

?>