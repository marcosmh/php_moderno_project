<?php

$names = ["Anakin","Luke","Obiwan","Yoda","Mace"];

foreach($names as $name) {
    echo $name."<br/>";
}

echo "<br/>";

$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.4,
    "country" => "Alemania"
];

foreach($beer as $v) {
    echo $v."<br/>";
}
echo "<br/>";

foreach($beer as $k => $v) {
    echo $k." --> ".$v."<br/>";
}