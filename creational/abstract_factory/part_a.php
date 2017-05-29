<?php

require_once './part.php';

class PartA implements Part {

    function __construct() {
        $this->description();
    }

    public function description() {
        echo "Jestem częścią A <br>";
    }

}
