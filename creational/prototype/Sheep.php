<?php

/*
 * oczywiście obiekt powinien być bardziej skomplikowany
 * aby uzasadnione było jego klonowanie a nie tworzenie na nowo
 */

class Sheep {

    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

}
