<?php

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


echo "Hola desde Composer <br>";

$now = Carbon::now();

echo "La fecha y hora actual es " . $now->toDateString();

echo "<br/>";

echo "Generar un archivo excel <br>";

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1','Nombre');
$sheet->setCellValue('A2','Anakin');

$writer = new Xlsx($spreadsheet);
$fileName = "../resources/excel/myExcel.xlsx";
$writer->save($fileName);

echo "Archivo generado";







