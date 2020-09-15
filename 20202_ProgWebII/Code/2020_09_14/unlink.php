<?php

$my_file = "/tmp/file2.txt";

if (unlink($my_file))
    echo "Unlink ok";
else
    echo "Unlink failed";