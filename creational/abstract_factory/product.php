<?php

require_once './i_parts_factory.php';

class Product {

    private $partA;
    private $partB;
    private $partC;

    function __construct(IPartsFactory $partFactory) {
        echo "Tworzę produkt z części <br>";

        $this->partA = $partFactory->createPartA();
        $this->partB = $partFactory->createPartB();
        $this->partC = $partFactory->createPartC();
    }

}
