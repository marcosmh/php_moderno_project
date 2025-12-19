<?php

$beer = new stdClass();

$beer->name = "Erdinger";
$beer->alcohol = 8.4;

$beer->name = "Erdinger Pikantus";

echo $beer->name;
echo "<br>";
print_r($beer);

$arr = (array) $beer;

echo "<br>";
echo gettype($arr);
echo "<br>";
print_r($arr);
echo "<br>";
echo $arr["name"];
echo $arr["alcohol"];

echo "<br>";
$arrLocation = [
    "address" => "Calle del Mal # 66",
    "country" => "Mexico"
];

$objLocation = (object) $arrLocation;
echo $objLocation->address;
echo "<br>";
print_r($objLocation);