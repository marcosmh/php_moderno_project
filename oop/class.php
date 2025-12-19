<?php
declare(strict_types = 1);

$sale = new Sale(10.4, date("Y-m-dd"));
$onlineSale = new OnlineSale(16, date("Y-m-dd"),"Tarjeta");

//$concept = new Concept("Cerveza",10);
//$sale->addConcept($concept);
echo $onlineSale->createInvoice();
echo $onlineSale->showInfo();

//print_r($sale->concepts);
//echo gettype($sale->total);
//echo $sale->createInvoice();

class Sale {
    public float $total;
    public string $date;
    public array $concepts;
    public static $count;

    public function __construct(float $total, string $date) {
        $this->total = $total;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }

    
    public function addConcept(Concept $concept) {
        $this->concepts[] = $concept;
    }

    public static function reset() {
        self::$count = 0;
    }

    public function createInvoice(): string {
        return "<br/>Se crea la factura";
    }

    public function __destruct()
    {
        //echo "<br/>Se ha eliminado el objeto";
    }
}

class OnlineSale extends Sale {
    public string $paymentMethod;

     public function __construct(float $total, string $date, string $paymentMethod) {
       parent::__construct($total, $date);
       $this->paymentMethod = $paymentMethod;
    }

    public function showInfo(): string {
        return "<br/>La venta tiene un monto de $this->total";
    }

}

class Concept {
    public string $description;
    public float|int $amount;

    public function __construct(string $description, float|int $amount) {
        $this->description = $description;
        $this->amount = $amount;
    }
}
