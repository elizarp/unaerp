<?php

$source = "/tmp/file.txt";
$destination = "/tmp/file-teste.txt";

if (rename($source,$destination))
    echo "Rename ok";
else
    echo "Rename failed";