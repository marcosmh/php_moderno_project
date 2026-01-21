<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;


$people1 = [
    new People("Luke","20"),
    new People("Anakin","38"),
    new People("Leia","18"),
    new People("Han","26"),
];

$people2 = [
    new People("Luke","20"),
    new People("Chewie","60"),
    new People("Anakin","38"),
    new People("Georgana","40"),
];

//echo ("Luke" <=> "Anakin")."<br>";
//echo ("Luke" <=> "Luke")."<br>";
//echo ("Anakin" <=> "Luke")."<br>";

$differences = array_udiff($people1, $people2, 
    fn ($person1, $person2) 
            => $person1->name <=> $person2->name );

show($differences);
