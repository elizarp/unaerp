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

$nome = "'; DROP DATABASE; //";
$sobrenome = "Monteiro dos Santos";
$email = "bruno.monteiro@unaerp.br";

// sql to create table/ inser, select, update and delete data
$sql = "INSERT INTO Alunos (nome, sobrenome, email, data_cadastro) VALUES ('$nome', '$sobrenome', '$email', current_timestamp());";

echo $sql;

$conn->close();
?>



