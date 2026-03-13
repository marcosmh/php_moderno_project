<?php

namespace app\bussines;

use app\interfaces\DataInterface;
use app\interfaces\Excelnterface;

class GeneratorExcel {

    private DataInterface $repository;
    private Excelnterface $excel;

    public function __construct(DataInterface $repository,
                                 Excelnterface $excel)
    {
        $this->repository = $repository;
        $this->excel = $excel;
    }

    public function generate(string $filePath) {
        $data = $this->repository->get();
        $this->excel->create($data, $filePath);
    }
}