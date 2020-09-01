<?php


$x = 100;  
$y = 50;
/*
if ($x == 100 and $y == 50) {
    echo "and!";
}
*/

if ($x == 100 or $y == 50) {
    echo "or!";
}

if ($x == 100 xor $y == 50) {
    echo "xor!";
}

if ($x == 100 && $y == 50) {
    echo "and!";
}

if (!($x == 100)) {
    echo "not!";
}

