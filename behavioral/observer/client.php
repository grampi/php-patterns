<?php

include_once 'observer.php';
include_once 'observable.php';

$observer1 = new Observer();
$observer2 = new Observer();
$observer3 = new Observer();

$subject = new Observable();

$subject->addObserver($observer1);
$subject->addObserver($observer2);
$subject->addObserver($observer3);

$subject->changeState();
