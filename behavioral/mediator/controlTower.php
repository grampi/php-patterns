<?php

require_once 'plane.php';

class ControlTower implements Mediator {

    private $planes = [];

    public function send($planeId, $message) {
        $this->planes[$planeId]->receive($message);
    }

    public function registerPlane(Plane $plane) {
        $plane->registerMediator($this);
        $this->planes[$plane->getId()] = $plane;
    }

    public function listRegistredPlanes() {
        echo "<pre>";
        var_dump($this->planes);
        echo "</pre>";
    }

}
