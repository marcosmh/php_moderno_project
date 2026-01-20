<?php

function add($a, $b) {
    return $a + $b;
}


function addMemo() {
    $memo = [];

    return function($a, $b) use(&$memo) {
        $index = $a."-".$b;

        if(isset($memo[$index])) {
            echo "Ya existia operacion <br>";
            return $memo[$index];
        }

        echo "No existia operacion <br>";
        $memo[$index] = $a + $b;
        return $memo[$index];
    };

}

$mySum = addMemo();
echo $mySum(4,6)."<br>";
echo $mySum(4,6)."<br>";
echo $mySum(42,62)."<br>";
echo $mySum(42,62)."<br>";