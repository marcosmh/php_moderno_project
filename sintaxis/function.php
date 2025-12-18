<?php

hi("Anakin Skywalker");
hi("Luke Skywalker");
echo add(10,20);
echo "<br/>";
echo sub(20,11);

function hi($name) {
    echo "Hola $name <br/>";
}

function add($a, $b) {
    $result = $a + $b;
    return $result;
}


function sub(int $a, int $b) : int {
    return $a - $b;
}