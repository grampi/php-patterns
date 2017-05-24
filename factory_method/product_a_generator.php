<?php

require_once './abstract_product_generator.php';
require_once './product_a.php';

class ProductAGenerator extends AbstractProductGenerator {

    /*
     * to jest metoda wytwórcza
     */
    protected function generateConcreteProduct() {
        echo "tu generator A produktu A";
        return new ProductA();
    }

}
