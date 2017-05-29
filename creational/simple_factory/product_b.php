<?php

require_once './product.php';

class productB implements productA {

    public function showDescription() {
        echo "jestem produkt B";
    }

}
