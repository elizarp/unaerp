<?php

/*
$array_teams = array('São Paulo', 'Palmeiras', 'Curintia', 'Santos');
# var_dump($array_teams);



$other_array_teams = ['São Paulo', 'Palmeiras', 'Curintia'];
var_dump($other_array_teams);

echo "<br/>";
echo $array_teams[2];
*/


$array_advanced = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array_advanced);
echo "<br/>";
# echo $array_advanced["foo"];
echo $array_advanced[100];
