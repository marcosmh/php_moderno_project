<?php
declare(strict_types = 1);

$sale = new Sale(date("Y-m-dd"));
$onlineSale = new OnlineSale( date("Y-m-dd"),"Tarjeta");

//$concept = new Concept("Cerveza",10);
//$sale->addConcept($concept);

//echo $onlineSale->createInvoice();
//echo $onlineSale->showInfo();

$concept = new Concept("Cerveza", 10.2);
$concept2 = new Concept("Cerveza 2", 20.23);
$sale->addConcept($concept);
$sale->addConcept($concept2);
echo $sale->getTotal();

$sale->setDate("2025-12-18");
echo $sale->getDate();




//print_r($sale->concepts);
//echo $sale->createInvoice();

class Sale {
    protected float $total;
    private string $date;
    private array $concepts;
    public static $count;

    public function __construct(string $date) {
        $this->date = $date;
        $this->total = 0;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept) {
        $this->concepts[] = $concept;
        $this->total += $concept->amount;
    }

    public function getTotal() : float {
        return $this->total;
    }

    public function getDate(): string {
        return "<br/>".$this->date;
    }

    public function setDate(string $date) {
        if(strlen($date) > 10){
            echo "<br/> La fecha es incorrecta.";
        }
        $this->date = $date;
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

     public function __construct(string $date, string $paymentMethod) {
       parent::__construct( $date);
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
