<?php

require_once 'tripDecorator.php';

class AllInclusive extends TripDecorator {

    public function getDescription() {
        return $this->trip->getDescription() . ' z full wypasem';
    }

    public function getPrice() {
        return $this->trip->getPrice() + 500;
    }

}
