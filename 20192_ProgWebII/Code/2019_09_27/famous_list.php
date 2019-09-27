<?php

// Open connection
$conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');

// Check connection
if ($conn->connect_errno) 
{
    echo "Failed to connect to MySQL: " . $conn->connect_error();
}

// Delete
if(!empty($_GET['action']) AND $_GET['action']=='delete'){
    $id_famous = (int)$conn->escape_string($_GET['id_famous']);
    if(!$conn->query("DELETE FROM famous WHERE id_famous = '{$id_famous}'")){
        echo("Error description: " . $conn->error);
    }
}

// Defines query
$query = "SELECT id_famous, name FROM famous";

// Select records
$result = $conn->query($query);

$items = '';
if($result){
    while ($row = $result->fetch_assoc()){
        $item = file_get_contents('html/item.html');
        $item = str_replace('{id_famous}', $row['id_famous'], $item);
        $item = str_replace('{name}',      $row['name'],      $item);
        $item .= "<!-- AOBA -->";
        $items .= $item;
    }
}


$conn->close();

$list = file_get_contents('html/list.html');
$list = str_replace('{items}', $items, $list);

print $list;
