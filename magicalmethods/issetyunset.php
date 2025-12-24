<?php

$a = 1;
unset($a);


if(isset($a)) {
    // echo "Existe";
} else {
    // echo "No existe";
}

$wine = new Wine();

if(isset($wine->name)) {
    echo "Existe <br>";
} else {
    echo "No existe <br>";
}

// unset($wine->style);

class Wine {

    public $style;

    private $data = [
        "name" => "vinos"
    ];

    public function __isset($name)
    {
        echo "Se comprueba existencia $name <br>";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Se intento eliminar la propiedad $name <br>";
    }



}