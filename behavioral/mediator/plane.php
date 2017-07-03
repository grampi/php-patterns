<?php

include_once 'mediator.php';

class Plane {

    private $mediator;
    private $id;

    function __construct($id) {
        $this->id = $id;
    }

    public function registerMediator(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function getId() {
        return $this->id;
    }

    public function send($id, $message) {
        echo "Tu samolot " . $this->id . ", mam wiadomość do " . $id . ": " . $message . "<br>";
        $this->mediator->send($id, $message);
    }

    public function receive($message) {
        echo "Tu samolot " . $this->id . ", otrzymałem wiadomość: " . $message . "<br>";
    }

}
