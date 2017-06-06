<?php

require_once 'Sheep.php';

$original = new Sheep('Molly');

/*
 * można też użyć metody magicznej __clone do ustawienia innych od oryginalnych właściwości obiektu
 */
$copy = clone $original;
$copy->setName('Dolly');

echo $original->getName() . "<br>";
echo $copy->getName() . "<br>";
