<?php

// Open connection
$conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Defines query
$query = "SELECT id_famous, name FROM famous";

// Select records
$result = mysqli_query($conn, $query);

if($result){
    while ($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
}

mysqli_close($conn);