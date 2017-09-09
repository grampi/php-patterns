<?php

require_once 'tripDecorator.php';

class ExtraInsurance extends TripDecorator {

    public function getDescription() {
        return $this->trip->getDescription() . ' z dodatkowym ubezpieczeniem';
    }

    public function getPrice() {
        return $this->trip->getPrice() + 100;
    }

}
