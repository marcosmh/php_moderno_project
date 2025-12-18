<?php

//$sale = new Sale();
//$sale->total = 10.4;
//$sale->date = date("Y-m-d");

$sale = new Sale(10.4, date("Y-m-d"));
$sale = new Sale(10.4, date("Y-m-d"));


echo Sale::$count."<br/>";
Sale::reset();
$sale = new Sale(10.4, date("Y-m-d"));
echo Sale::$count." ";

//$sale->createInvoice();

echo "<br/>";
echo gettype($sale);
echo "<br/>";
print_r($sale);



class Sale {
    public $total;
    public $date;
    public static $count;

    public function __construct($total, $date) {
        $this->total = $total;
        $this->$date = $date;
        self::$count++;
    }

    public static function reset() {
        self::$count = 0;
    }

    public function __destruct()
    {
        //echo "<br/>Se ha eliminado el objeto";
    }

    public function createInvoice() {
        echo "<br/>Se crea la fatura";
    }
}