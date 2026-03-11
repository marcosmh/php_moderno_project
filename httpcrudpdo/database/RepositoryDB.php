<?php

namespace app\database;

use PDO;
use app\interfaces\RepositoryInterface;
use app\database\BaseRepository;

class RepositoryDB extends BaseRepository implements RepositoryInterface {
    const TABLE = 'beer';

    public function create($data) {
        
        $sql = "INSERT INTO ".self::TABLE. "( name, alcohol, idBrand ) "
            ." VALUES ( :name, :alcohol, :idBrand )";
        
        $smt = $this->pdo->prepare($sql);
        //$smt->execute($data);
        $smt->execute([
            ':name'    => $data['name'],
            ':alcohol' => $data['alcohol'],
            ':idBrand' => $data['idBrand']
        ]);
    }

    public function get(): array {
        $sql = "SELECT * FROM ".self::TABLE;
        $smt = $this->pdo->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function update($data) {

        $sql = "UPDATE ".self::TABLE
               ." SET name = :name, alcohol = :alcohol, idBrand = :idBrand  "
               ." WHERE id = :id ";
        print_r($sql);
        $smt = $this->pdo->prepare($sql);

        $smt->execute([
            ":id"      => $data['id'],
            ':name'    => $data['name'],
            ':alcohol' => $data['alcohol'],
            ':idBrand' => $data['idBrand']
        ]);
        
    } 

    public function delete(int $id) {
        $sql = "DELETE FROM ".self::TABLE
               ." WHERE id = :id ";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([ ":id" => $id ]);
    }

    public function exists(int $id): bool {
        $sql = "SELECT * FROM ".self::TABLE
                . " WHERE id = :id ";
        $smt = $this->pdo->prepare($sql);
        $smt->execute(['id' => $id]);
        $result = $smt->rowCount() > 0;
        return $result;
    }
}