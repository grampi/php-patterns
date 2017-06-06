<?php

require_once './product.php';

class productA implements product {

    public function showDescription() {
        echo "jestem produkt A";
    }

}
