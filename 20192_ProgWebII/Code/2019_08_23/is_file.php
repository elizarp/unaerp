<?php

$my_file = "/tmp/file.txt";

if (is_file($my_file))
    echo "Yes";
else
    echo "No";