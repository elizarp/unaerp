<?php

// Open connection
$conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Insert records
if (!mysqli_query($conn, "INSERT INTO famous (id_famous, name) VALUES (1,'Eliézer Zarpelão')")){
    echo("Error description: " . mysqli_error($conn));
}

mysqli_close($conn);