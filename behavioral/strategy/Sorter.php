<?php

require_once 'SortStrategy.php';

class Sorter {

    protected $sorter;

    public function __construct(SortStrategy $sorter) {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset) {
        return $this->sorter->sort($dataset);
    }

}
