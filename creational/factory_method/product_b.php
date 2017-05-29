<?php

require_once './Product.php';

class ProductB implements Product {

    public function showDescription() {
        echo "Jestem produkt B";
    }

}
