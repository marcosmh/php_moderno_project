<?php

trait EmailSender {
    public function sendEmail() {
        echo "Se envía un email <br/>";
    }
}

trait DB {
    public function save() {
        echo "Se guarda en la base de datos <br/>";
    }
}

trait Log {
    public function log(string $message, string $filename){
        if(!file_exists($filename)){
            file_put_contents($filename,"");
        }
        $current = file_get_contents($filename);
        $current .= date("Y-m-d H:i:s")." - "."\n";
        echo $current;
        file_put_contents($filename,$current);
    }
}


class Invoice {
    use EmailSender, DB, Log;

    public function create() {
        echo "Se crea la factura <br/>";
        $this->log("Se creo la factura","log.txt");

    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->save();
$invoice->create();