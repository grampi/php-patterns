<?php

include_once 'MenuItem.php';
include_once 'CompositeMenuItem.php';

class FileMenu extends CompositeMenuItem {
    
}

class FileNew extends MenuItem {
    
}

class FileSave extends MenuItem {
    
}

$fileMenu = new FileMenu('Plik');
$fileMenu->addMenuItem(new FileNew('Nowy plik'));
$fileMenu->addMenuItem(new FileSave('Zapisz plik'));

echo $fileMenu->itemName . "<br>";
foreach ($fileMenu->listMenuItems() as $menuItem) {
    echo $menuItem->itemName . "<br>";
}
