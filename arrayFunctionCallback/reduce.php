<?php

require "modelsArray/people.php";

use ModelsArray\People;

$people = [
    new People("Anakin","30"),
    new People("Luke","25"),
    new People("Leia","20")
];

$sum = array_reduce($people,
    fn ($current, $person) => $current + $person->age, 0
);

echo $sum;

$namesPipe = array_reduce($people,
        fn ($current, $person) => $current.$person->name."|",""
);

echo "<br/>";
echo $namesPipe;


$contentHTML = array_reduce($people,
    fn ($current, $person) => $current."<li>".$person->name."</li>","<ul>"
);
$contentHTML .= "</ul>";

echo $contentHTML;