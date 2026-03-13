<?php

namespace app\excel;

use app\interfaces\Excelnterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class CreatorExcel implements Excelnterface {

    public function create(array $data, string $filePath) {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $headers = ['Id','Cerveza','Alcohol'];
        $sheet->fromArray([$headers], null, 'A1');
        $sheet->fromArray($data,null, 'A2');
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);

    }
}