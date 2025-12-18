<?php

$beers = [
    "Carolus",
    "London Porter",
    "Delirium Red",
    "Corona"
];

$beers2 = [
    "Carolus 2",
    "London Porter 2",
    "Delirium Red 2",
    "Corona 2"
];

$beers[] = "1";

array_push($beers,"Karmeliten");
array_pop($beers);



echo count($beers);

echo "<br/>";

print_r($beers);

echo "<br/>";

if(in_array("Corona",$beers)) {
    echo "Existe";
} else {
    echo "No existe";
}

echo "<br/>";

$beerMixed = array_merge($beers, $beers2);
print_r($beerMixed);