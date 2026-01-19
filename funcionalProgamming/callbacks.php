<?php

$numbers = [1,2,3,4,5,6];

function process(array $arr, callable $fun) {
    $newArr = [];

    foreach($arr as $element) {
        $newElement = $fun($element);
        $newArr[] = $newElement;
    }
    return $newArr;
}

$result1 = process($numbers, fn($e) => $e * 2);
print_r($result1);

echo "<br>";

$result2 = process($numbers, fn($e) => $e * 10);
print_r($result2);

echo "<br>";

$result3 = process($numbers, fn($e) => " -> El valor es: <b>".$e."</b> <br>");
print_r($result3);
