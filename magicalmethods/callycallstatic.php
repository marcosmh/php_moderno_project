<?php

$engine = new Engine("log.txt");
$engine->error("un error ocurrio");
$engine->log("El usuario ha hecho lo siguiente");




//$engine->run("name","some",true);
//Engine::some();




class Engine {

    private $fileName;

    public function __construct($fileName) {
        $this->fileName = $fileName;
    }

    public function __call($name, $args) {
        echo "Llamando al metod '$name' "
            ." con los argumentos  ".implode(',',$args)."\n";

       $message = $name.": ";
       $message .= $args[0]." - ";
       $message .= date("Y-m-d H:i:s");
       
       if(!file_exists($this->fileName)) {
            file_put_contents($this->fileName, "");
       }

       file_put_contents($this->fileName, $message, FILE_APPEND);

    }

    public static function __callstatic($name, $args) {
        echo "Llamando al metod '$name' "
            ." con los argumentos  ".implode(',',$args)."\n";
    }
}