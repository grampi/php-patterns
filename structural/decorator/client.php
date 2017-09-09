<?php

require_once 'baseTrip.php';
require_once 'allInclusive.php';
require_once 'extraInsurance.php';

$trip = new ExtraInsurance(new AllInclusive(new BaseTrip()));

echo $trip->getDescription() . ' / ' . $trip->getPrice() . 'PLN';
