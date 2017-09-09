<?php

require_once 'trip.php';

abstract class TripDecorator implements Trip {

    protected $trip;

    function __construct(Trip $trip) {
        $this->trip = $trip;
    }

    abstract function getPrice();

    abstract function getDescription();
}
