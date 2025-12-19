<?php

$beer = new Beer("Delirum Red", "Delirium", 8, true);
$json = json_encode($beer);
echo $json;

echo "<br>";

$jsonBeer = '{"name":"Delirum Red","brand":"Delirium","alcohol":8,"isStrong":true}';
$objBeer = json_decode($jsonBeer);
print_r($objBeer);

echo "<br>";

$arr = [
    "name" => "Anakin",
    "country" => "Mexico"
];

$newJson = json_encode($arr);
echo $newJson;

echo "<br>";

$newArr = json_decode($newJson, true);
echo $newArr["name"];
echo "<br>";
echo $newArr["country"];


class Beer {
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;

    public function __construct($name, $brand, $alcohol, $isStrong)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }


}