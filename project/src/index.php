<?php

require __DIR__ . '/../vendor/autoload.php';

use app\interfaces\Excelnterface;
use app\interfaces\DataInterface;
use app\data\BeerData;
use app\excel\CreatorExcel;
use app\bussines\GeneratorExcel;

$now = date('Y-m-d');
$filePath = __DIR__ . '/files/beer-'.$now.'.xlsx';

$respository = new BeerData();
$excel = new CreatorExcel();
$generator = new GeneratorExcel($respository, $excel);

$generator->generate($filePath);

echo "Excel creado. ";