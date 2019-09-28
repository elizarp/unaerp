<?php

function famous_get_all(){
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

    // Close connection
    $conn->close();
    return $result;
}

function famous_delete($id_famous){
    // Open connection
    $conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');

    // Check connection
    if ($conn->connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $conn->connect_error();
    }

    if(!$conn->query("DELETE FROM famous WHERE id_famous = '{$id_famous}'")){
        echo("Error description: " . $conn->error);
    }

    // Close connection
    $conn->close();
}