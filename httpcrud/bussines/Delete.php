<?php

namespace app\bussines;

use app\interfaces\RepositoryInterface;
use app\exceptions\DataException;

class Delete {

    private RepositoryInterface $repository;


    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function delete($id ) {

        if(!$this->repository->exists($id)) {
            throw new DataException("No existe el dato a eliminar");
        }

        $this->repository->delete($id);

    }

}