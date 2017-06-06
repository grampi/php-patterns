<?php

require_once './product.php';

class productB implements product {

    public function showDescription() {
        echo "jestem produkt B";
    }

}
