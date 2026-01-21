<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [
    new People("Anakin","38"),
    new People("Luke","18"),
    new People("Leia","18")
];

$names = array_map(fn($person) => $person->name, $people );
show($names);
//show($people);

$namesWithFormat = array_map(fn($person)
    => "<b style='color: red'>".$person->name."</b>",
    $people
);

show($namesWithFormat);

show(array_keys($people));

$nameWithNumber = array_map(fn($person, $index)
    => ($index + 1)." - ".$person->name
    ,$people, array_keys($people)
);

show($nameWithNumber);

$nameWithNumber2 = array_map(fn($person, $index)
    => ["id" => ($index + 1), "name" => $person->name ]
    ,$people, array_keys($people)
);

show($nameWithNumber2);

echo $nameWithNumber2[0]["id"];
echo $nameWithNumber2[0]["name"];