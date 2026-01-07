<?php

class Counter {
    public int $count = 0;
}

$counter = new Counter();

function show(Counter $counter) {
    $counter->count++;
    return $counter->count."<br/>";
}


function add(float $a, float $b): float {
    return $a + $b;
}

echo add(10,20);
echo add(10,20);
echo add(10,20);
echo add(10,20);


/*
echo show($counter);
echo show($counter);
echo show($counter);
echo show($counter);

echo $counter->count;
*/