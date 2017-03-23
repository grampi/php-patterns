<?php

require_once './abstract_product_generator.php';
require_once './product_b.php';

class ProductBGenerator extends AbstractProductGenerator {

    protected function generateConcreteProduct() {
        echo "tu generator B produktu B";
        return new ProductB();
    }

}
