<?php

$my_file = file("/tmp/file.txt");

foreach ($my_file as $line){
    echo $line . "<br/>";
}