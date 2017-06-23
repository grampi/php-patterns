<?php

include_once 'observer.php';

/**
 * Observable
 * można też zaimplementować 'SplSubject'
 */
class Observable {

    private $observers = [];

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function changeState() {
        // do something here, change state etc...

        $this->notifyObservers();
    }

    private function notifyObservers() {
        if (!empty($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->notify();
            }
        }
    }

}
