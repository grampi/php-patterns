<?php

require_once 'trip.php';

class BaseTrip implements Trip {

    public function getDescription() {
        return "Wycieczka do Amsterdamu";
    }

    public function getPrice() {
        return 2000;
    }

}
