<?php
$dir = '/tmp/directory';

if(mkdir($dir,0777))
    echo "Directory created!";
else
    echo "Fail";