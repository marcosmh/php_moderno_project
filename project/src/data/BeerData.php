<?php

namespace app\data;

use PDO;
use app\interfaces\DataInterface;
use app\data\BaseData;

class BeerData extends BaseData implements DataInterface {

    const TABLE = 'beer';

    public function get() : array {
        $sql = "SELECT id, name, alcohol FROM " . self::TABLE;
        $smt = $this->pdo->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}
