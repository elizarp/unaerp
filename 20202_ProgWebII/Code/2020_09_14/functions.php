<?php
/*
function sum($value_a, $value_b) {
    return $value_a + $value_b;
}

echo sum(4,5);
*/



/*

function writeTeams(){
    $args = func_get_args();
    print_r($args);
    
    #foreach($args as $value){
    #    echo $value . '<br/>';
    #}
}

writeTeams('São Paulo', 'Santos', 'Palmeiras', 'Outro Parametro');
*/





function fatorial($number){
    if ($number == 1)
        return $number;
    else {
        print_r($GLOBALS);
        return $number * fatorial($number - 1);
    }
}

echo fatorial(3) . "<br/>";


