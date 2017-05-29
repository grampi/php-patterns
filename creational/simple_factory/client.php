<?php

require_once './simple_factory.php';

$pr = sf::getProduct('A');
$pr->showDescription();
