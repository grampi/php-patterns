<?php

require_once 'SortStrategy.php';

class QuickSort implements SortStrategy {

    public function sort(array $collectionToSort) {
        echo "Sortowanie szybkie" . "<br>";
    }

}
