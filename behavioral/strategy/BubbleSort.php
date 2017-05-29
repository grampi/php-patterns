<?php

require_once 'SortStrategy.php';

class BubbleSort implements SortStrategy {

    public function sort(array $collectionToSort) {
        echo "Sortowanie bombelkowe" . "<br>";
    }

}
