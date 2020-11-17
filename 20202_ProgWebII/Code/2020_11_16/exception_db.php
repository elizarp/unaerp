<?php

# a corrigir

$servername = "127.0.0.1";
$username = "newuser";
$password = 'p@$$w0rdaaaa';
$dbname = "myDB";

try{
// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
} catch (Exception $excecao) {
	var_dump($excecao);
	exit();
}


$sql = "SELECT id, nome, sobrenome, email, data_cadastro FROM AlunosSSSSS;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table border=1>";
	echo "<tr><td>Id</td><td>Nome</td><td>Sobrenome</td></tr>";
	// saida de cada linha
	while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["sobrenome"]. "</td></tr>";
	}
  
	echo "</table>";
  } else {
	echo "0 results";
  }
  

$conn->close();

#try{
	
#} catch(Exception $excecao){
#	var_dump($excecao);
#}

echo "Outros comandos....";

?>