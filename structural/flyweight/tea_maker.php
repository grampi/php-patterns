<?php

include_once 'tea.php';

/**
 * TeaMaker
 */
class TeaMaker {

    private $availableTea = [];

    public function make($preference) {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new Tea();
        }

        return $this->availableTea[$preference];
    }

}
