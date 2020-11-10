<?php

$servername = "127.0.0.1";
$username = "newuser";
$password = 'p@$$w0rd';
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nome = "Edson";
$sobrenome = "da Silva Leite Júnior";
$email = "edson.junior@unaerp.br";

$preparado = $conn->prepare("INSERT INTO Alunos (nome, sobrenome, email) VALUES (?, ?, ?)");
$preparado->bind_param("sss", $nome, $sobrenome, $email);

$preparado->execute();

echo "Foi!";

$conn->close();
?>



