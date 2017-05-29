<?php

require_once 'BubbleSort.php';
require_once 'QuickSort.php';
require_once 'Sorter.php';

$dummyDataset = [1, 5, 4, 3, 2, 8];

$sorter = new Sorter(new BubbleSort());
$sorter->sort($dummyDataset);

$sorter = new Sorter(new QuickSort());
$sorter->sort($dummyDataset);
