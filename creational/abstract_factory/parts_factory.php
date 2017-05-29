<?php

require_once './parts_factory.php';
require_once './i_parts_factory.php';
require_once './part_a.php';
require_once './part_b.php';
require_once './part_c.php';

class PartsFactory implements IPartsFactory {

    public function createPartA() {
        return new PartA();
    }

    public function createPartB() {
        return new PartB();
    }

    public function createPartC() {
        return new PartC();
    }

}
