<?php

function add(float $number1) {
    return function($number2) use($number1) {
        return $number1 + $number2;
    };
}

function hi() {
    $count = 0;

    return function() use(&$count) {
        $count++;
        return "Hola $count";
    };
}

$s1 = add (10);
$s2 = add (60);
$h1 = hi();
$h2 = hi();

echo $h1()."<br>";
echo $h1()."<br>";
echo $h1()."<br>";
echo $h2();


/*
echo $s1(20);
echo "<br>";
echo $s1(10);
echo "<br>";
echo $s1(100);

echo "<br> <br>";
echo $s2(20);
echo "<br>";
echo $s2(10);
echo "<br>";
echo $s2(100);
*/