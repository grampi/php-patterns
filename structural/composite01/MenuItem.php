<?php

abstract class MenuItem {

    public $itemName;

    function __construct($itemName) {
        $this->itemName = $itemName;
    }

    function getComposite() {
        return false;
    }

}
