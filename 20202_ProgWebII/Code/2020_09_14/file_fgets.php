<?php

$my_file = fopen(__FILE__, "r");
$line = 1;

while (!feof($my_file)){
    $buffer = fgets($my_file, 4096); //read a line from file
    if($line > 1){
        echo $buffer; // print line
    }
    $line++;
}

fclose($my_file);