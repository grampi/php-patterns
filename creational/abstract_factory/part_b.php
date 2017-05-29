<?php

require_once './part.php';

class PartB implements Part {

    function __construct() {
        $this->description();
    }

    public function description() {
        echo "Jestem częścią B <br>";
    }

}
