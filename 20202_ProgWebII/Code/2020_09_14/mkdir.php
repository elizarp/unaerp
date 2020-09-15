<?php
$dir = '/tmp/directory/teste';

if(mkdir($dir,0777))
    echo "Directory created!";
else
    echo "Fail";