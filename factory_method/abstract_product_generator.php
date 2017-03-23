<?php

abstract class AbstractProductGenerator {

    public function generateProduct() {
        $product = $this->generateConcreteProduct();
        $product->showDescription();
    }

    protected abstract function generateConcreteProduct();
}
