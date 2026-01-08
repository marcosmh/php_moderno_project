<?php

$some = function($a, $b): float {
    return $a + $b;
};

$sum = fn(float $a, float $b) => $a + $b;



function mul($a, $b): float {
    return $a * $b;
};

function show(callable $fn, float $a, float $b){
    echo $fn($a, $b);
}

show($sum, 6, 3);
echo "<br>";
show(fn($a, $b) => $a - $b, 6, 3);

