<?php

// Open connection
$conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');

// Check connection
if ($conn->connect_errno) 
{
    echo "Failed to connect to MySQL: " . $conn->connect_error();
}

// Insert records
if (!$conn->query("INSERT INTO famous (id_famous, name) VALUES (1,'Eliézer Zarpelão')")){
    echo("Error description: " . $conn->error);
}

$conn->close();