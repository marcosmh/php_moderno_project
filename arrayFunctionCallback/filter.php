<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [
    new People("Anakin","30"),
    new People("Luke","25"),
    new People("Leia","20")
];

$greater25Years = array_filter($people,
    fn($person) => $person->age >= 25 );

show($greater25Years);

$withoutLuke = array_filter($people,
    fn ($person) => $person->name != "Luke"
);

show($withoutLuke);