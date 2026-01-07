<?php

// Principio de sustitucion de Liskov
// Liskov substitution principle

interface ISendProject {
    public function send();
}

interface ISendEmail {
    public function send();
}

class SendEmail implements ISendEmail {
    public function send(){
        echo "Se envia el correo electronico <br>";
    }
}

class Project {
    public function create() {
        echo "Se ha creado el proyecto <br>";
    }

    /*
    public function send() {
        echo "Se envia el proyecto <br>";
    }
    */
}

class SalesProject extends Project implements ISendProject {

    private ISendEmail $sender;

    public function __construct(ISendEmail $sender)
    {
        $this->sender = $sender;
    }

    // aqui mas funcionamiento

    public function send() {
        // echo "Se envia el proyecto <br>";
        $this->sender->send();
    }
}

class InternalProject extends Project {

    // extra codigo

    /*
    public function send() {
        throw new Exception("Los proyectos internos no se enviaron. <br>");
    }
    */
}

function send(ISendProject $project) {
    $project->send();
}


/*
function send(Project $project) {
    $project->send();
}
*/
//send(new Project());
// send(new InternalProject());

$sendEmail = new SendEmail();
send(new SalesProject($sendEmail));
