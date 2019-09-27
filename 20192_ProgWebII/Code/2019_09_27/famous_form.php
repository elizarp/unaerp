<?php

if(!empty($_REQUEST['action'])){
    // Open connection
    $conn = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','books');

    // Check connection
    if ($conn->connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $conn->connect_error();
    }

    if($_REQUEST['action']=='edit'){
        $id_famous = (int)$conn->escape_string($_GET['id_famous']);
        $result = $conn->query("SELECT id_famous, name FROM famous WHERE id_famous = '{$id_famous}'");
        $famous = $result->fetch_assoc();
    } else if($_REQUEST['action']=='save'){
        $famous = $_POST;
        if(empty($famous['id_famous'])){
            $sql = "INSERT INTO famous (name) VALUES ('{$famous['name']}')";
            $result = $conn->query($sql);
        } else{
            $sql = "UPDATE famous SET name = '{$famous['name']}' WHERE id_famous = '{$famous['id_famous']}'";
            $result = $conn->query($sql);
        }
        header('Location: famous_list.php');
    }
    $conn->close();
    
}
else{
    $famous = [];
    $famous['id_famous'] = '';
    $famous['name'] = '';
}


$form = file_get_contents('html/form.html');
$form = str_replace('{id_famous}', $famous['id_famous'], $form);
$form = str_replace('{name}', $famous['name'], $form);

print $form;
