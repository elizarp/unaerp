<?php

// Open connection
$conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');
#$conn = mysqli_connect('db4free.net','usereliezer','12345678','eliezer', 3306);

if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error);
}

echo 'Success... ' . $conn->host_info . "\n";

#print_r($conn);

mysqli_close($conn);