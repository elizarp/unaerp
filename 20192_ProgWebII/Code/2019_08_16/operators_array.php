<?php

/*
$first_league = ["São Paulo"];  
$second_league = ["Curintia","Palmeiras"];
$third_league = ["Ibis","Noroeste","Ponte Preta"];
$third_league_2 = ["Ibis2","Noroeste2","Ponte Preta2"];

print_r($first_league + $second_league + $third_league+ $third_league_2);
*/


$first_league = ["a" => "São Paulo"];  
$second_league = ["b" => "Curintia", "c" => "Palmeiras"];
$third_league = ["d"=> "Ibis", "e"=>"Noroeste", "f"=>"Ponte Preta"];

print_r($first_league + $second_league + $third_league);

?>