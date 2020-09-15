<?php

$my_file = fopen("/tmp/file.txt","w"); //open file to write

fwrite($my_file, "line 01" . PHP_EOL);
fwrite($my_file, "line 02" . PHP_EOL);
fwrite($my_file, "line 03" . PHP_EOL);
fwrite($my_file, "line 04" . PHP_EOL);

fclose($my_file);