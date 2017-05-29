<?php

abstract class AbstractProductGenerator {

    public function generateProduct() {
        $product = $this->generateConcreteProduct();
        $product->showDescription();
    }

    /*
     * Implementowana przez klasę dziedziczącą, i to jej pozwalamy na stworzenie konkretnego obiektu
     */
    protected abstract function generateConcreteProduct();
}
