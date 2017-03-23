<?php

require_once './part.php';

class PartC implements Part {

    function __construct() {
        $this->description();
    }

    public function description() {
        echo "Jestem częścią C <br>";
    }

}
