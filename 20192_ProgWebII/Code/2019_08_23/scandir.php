<?php
$dir = '/';

if(is_dir($dir)){
    $lines = scandir($dir);

    foreach($lines as $line){
        print $line . '<br/>' . PHP_EOL;
    }
}