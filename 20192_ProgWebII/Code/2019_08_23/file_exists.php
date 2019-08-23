<?php

$my_file = "/tmp/file2.txt";

if (file_exists($my_file))
    echo "File exists";
else
    echo "Isso non ecziste";