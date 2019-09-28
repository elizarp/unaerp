<?php
require 'db/famous_db.php';

// Delete
if(!empty($_GET['action']) AND $_GET['action']=='delete'){
    $id_famous = (int)$_GET['id_famous'];
    famous_delete($id_famous);
}

$result = famous_get_all();

$items = '';
if($result){
    while ($row = $result->fetch_assoc()){
        $item = file_get_contents('html/item.html');
        $item = str_replace('{id_famous}', $row['id_famous'], $item);
        $item = str_replace('{name}',      $row['name'],      $item);
        $items .= $item;
    }
}

$list = file_get_contents('html/list.html');
$list = str_replace('{items}', $items, $list);

print $list;
