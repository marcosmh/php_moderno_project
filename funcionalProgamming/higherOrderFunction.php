<?php

$some = function($a, $b): float {
    return $a + $b;
};

function mul($a, $b): float {
    return $a * $b;
};

function show(callable $fn, float $a, float $b){
    echo $fn($a, $b);
}

show($some,3,6);
show("mul",3,6);