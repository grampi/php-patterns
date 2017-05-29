<?php

require_once './product_a.php';
require_once './product_b.php';

class SF {

    // może, ale nie musi być statyczna
    public static function getProduct($type) {
        $product = null;

        switch ($type) {
            case 'A':
                $product = new productA();
                break;
            case 'B':
                $product = new productB();
                break;
            default:
                break;
        }

        return $product;
    }

}
