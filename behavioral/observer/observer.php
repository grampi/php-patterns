<?php

/**
 * Observer
 * można też zaimplementować 'SplObserver'
 */
class Observer {

    public function notify() {
        echo "zostałem powiadomiony" . "<br>";
    }

}
