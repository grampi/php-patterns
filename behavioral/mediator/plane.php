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
        echo "Przesyłanie wiadomości od " . $this->id . " do " . $id . ": " . $message;
        $this->mediator->wyślij($id, $message);
    }

    public function receive($message) {
        echo "Wiadomość otrzymana od " . $this->id . ": " . $message . "<br>";
    }

}
