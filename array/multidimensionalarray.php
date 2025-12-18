<?php

$beers = [
    [
        "name" => "Erdinger",
        "alcohol" => 8.4,
        "country" => "Alemania"
    ],
    [
        "name" => "Erdinger 2",
        "alcohol" => 8.4,
        "country" => "Alemania"
    ]
];

echo $beers[1]["name"];

echo "<br/>";

foreach($beers as $beer) {
    foreach($beer as $key => $value) {
        echo $key." => ".$value."<br/>";
    }
}