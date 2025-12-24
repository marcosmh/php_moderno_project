<?php

$person = new Person();
$person->name = "Anakin";
echo $person->name;
echo $person->country;
$person->address = "Calle tal";
echo $person->address;


class Person {
    public int $id;
    public string $name;
    public array $data = [];

    public function __get($name) {
        //echo "<br> No existe $name en el objeto.";
        return $this->data[$name];
    }

    public function __set($name, $value) {
        //echo "<br> No puedes agregar $value a $name";
        return $this->data[$name] = $value;
    }
}