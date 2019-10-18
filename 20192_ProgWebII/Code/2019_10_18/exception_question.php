<?php
function getYear()
{
    throw new Exception("2016");
    return 2015;
}

$x = 0;
try {
    $x = getYear();
} catch (Exception $e) {
    $x++;
} finally {
    echo $x++;
}
