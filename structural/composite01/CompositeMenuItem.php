<?php

class CompositeMenuItem extends MenuItem {

    private $menuItemsList = [];

    function getComposite() {
        return $this;
    }

    function listMenuItems() {
        return $this->menuItemsList;
    }

    function addMenuItem($menuItem) {
        if (in_array($menuItem, $this->menuItemsList)) {
            return;
        }

        $this->menuItemsList[] = $menuItem;
    }

    function removeMenuItem($menuItem) {
        $newMenuItemsList = [];

        foreach ($this->menuItemsList as $currentMenuItem) {
            if ($currentMenuItem !== $menuItem) {
                $newMenuItemsList[] = $currentMenuItem;
            }
        }

        $this->menuItemsList = $newMenuItemsList;
    }

}
