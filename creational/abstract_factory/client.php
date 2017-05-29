<?php

require_once './product.php';
require_once './parts_factory.php';

$product = new Product(new PartsFactory());
