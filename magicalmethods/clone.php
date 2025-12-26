<?php

class A {
    public string $label;

}

class Some {
    public string $name;
    public A $a;

    public function __clone()
    {
        $this->name = strtoupper($this->name);
        $this->a = clone $this->a;
    }
}

function change(Some $some) {
    $some->name = "Ya no tiene algo, se ha cambiado su valor <br>";
}

$some = new Some();
$some->a = new A();
$some->a->label = "un label <br>";
$some->name = "Algo <br>";
$some2 = $some;
$some2->name = "Lo cambio <br>";

//echo $some2->name."<br>";
//echo $some->name."<br>";
//change($some);
//echo $some->name."<br>";
//echo $some2->name."<br>";

$newSome = clone $some;
$some->a = new A();
$some->a->label = "un label <br>";
$some->name = "Algo <br>";
$some2 = $some;
$some2->name = "lo cambio <br>";
change($some);

echo $some->name;
echo $some2->name;

//$newSome->name = "Lo cambio el clonado <br>";
//$newSome->a->label = "cambio el label <br>";
//echo $newSome->a->label;

//echo $some->name."<br>";
//echo $newSome->name."<br>";


/*
$array1 = [1,2,3];
$array2 = $array1;
$array2[] = 10;

print_r($array1);
print_r($array2);
*/