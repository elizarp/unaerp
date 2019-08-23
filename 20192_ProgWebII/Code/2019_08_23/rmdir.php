<?php
$dir = '/tmp/directory';

if(rmdir($dir))
    echo "Directory gone!";
else
    echo "Fail";