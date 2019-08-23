<?php

$source = "/tmp/file.txt";
$destination = "/tmp/file2.txt";

if (copy($source,$destination))
    echo "Copy ok";
else
    echo "Copy failed";