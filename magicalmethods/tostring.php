<?php

class Car {
    private string $model;
    private string $brand;
    private int $year;


    public function __construct($model, $brand, $year)
    {
        $this->model = $model;
        $this->brand = $brand;
        $this->year = $year;
    }

    public function __toString()
    {
        return "El carro es modelo $this->model de la maca $this->brand";
    }
}


$car = new Car("HRV","Honda",2024);
echo $car;
$info = (string) $car;
echo $info;