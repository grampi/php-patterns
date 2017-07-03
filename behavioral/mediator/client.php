<?php

include_once 'plane.php';
include_once 'controlTower.php';

$plane1 = new Plane("SP-200");
$plane2 = new Plane("SP-300AB");

$controlTower = new ControlTower();
$controlTower->registerPlane($plane1);
$controlTower->registerPlane($plane2);

$plane1->send('SP-300AB', 'hejka');
