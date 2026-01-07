<?php
// Principio de responsabilidad unica
// Single responsability principle

class Order {

    private $items = [];
    private $total;

    public function getTotal() {
        return $this->total;
    }

    public function addItem($description, $price) {
        $this->items[] = [
            "description" => $description,
            "total" => $price
        ];
        $this->total += $price;
    }

    public function createOrder() {
        echo "Se procesa el pedido. <br>";
    }

}

class EmailNotifier {

    public function send(Order $order) {
        echo "Mensaje del pedido, total: " . $order->getTotal() . "<br>";
    }
}

$order = new Order();
$order->addItem("Produco 1", 100);
$order->addItem("Produco 2", 200);
$order->createOrder();

$emailNotifier = new EmailNotifier();
$emailNotifier->send($order);


/*
class Order {

    private $items = [];
    private $total;

    public function addItem($description, $price) {
        $this->items[] = [
            "description" => $description,
            "total" => $price
        ];
        $this->total += $price;
    }

    public function createOrder() {
        echo "Se procesa el pedido. <br>";
        $this->sendEmail();
    }

    private function sendEmail() {
        echo "Se ha enviado la orden <br>";
    }

}
*/