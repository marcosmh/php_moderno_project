<?php
// Principio de segregacion de las interfaces
// Interface sefregation principle

interface CrudBaseInterface {
    public function add();
    public function get();
    
}

interface UpdateCrudInterface {
    public function update();
}

interface DeleteCrudInterface {
    public function delete();
}

interface GeneralCrudInterface extends CrudBaseInterface,
    UpdateCrudInterface, DeleteCrudInterface {

}

class UserCrud implements GeneralCrudInterface {

     public function add() {
        echo "Se agrega <br>";
     }
    public function get(){
        echo "Se obtiene <br>";
    }
    public function update() {
        echo "Se actualiza <br>";
    }
    public function delete(){
        echo "Se elimina <br>";
    }
}

class SaleCrud implements CrudBaseInterface,
    UpdateCrudInterface {

    public function add() {
        echo "Se agrega <br>";
     }
    public function get(){
        echo "Se obtiene <br>";
    }
    public function update() {
        throw new Exception("No se puede modificar una venta <br>");
    }
    
}

function general(GeneralCrudInterface $crud) {
    $crud->add();
    $crud->update();
}

function get(CrudBaseInterface $crud) {
    $crud->get();
}

general(new UserCrud());
get(new SaleCrud());