<?php

$source = "/tmp/file2.txt";
$destination = "/tmp/file3.txt";

if (rename($source,$destination))
    echo "Rename ok";
else
    echo "Rename failed";