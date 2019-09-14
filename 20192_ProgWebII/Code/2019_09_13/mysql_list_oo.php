<?php

// Open connection
$conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');

// Check connection
if ($conn->connect_errno) 
{
    echo "Failed to connect to MySQL: " . $conn->connect_error();
}

// Defines query
$query = "SELECT id_famous, name FROM famous";

// Select records
$result = $conn->query($query);

if($result){
    while ($row = $result->fetch_assoc()){
        print_r($row);
    }
}

$conn->close();