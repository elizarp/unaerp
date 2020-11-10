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

$sql = "SELECT id, nome, sobrenome, email, data_cadastro FROM Alunos;";
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
?>



