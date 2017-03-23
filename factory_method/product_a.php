<?php

require_once './product.php';

class ProductA implements Product {

    public function showDescription() {
        echo "Jestem produkt A";
    }

}
