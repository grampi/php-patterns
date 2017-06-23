<?php

/**
 * DBAbstraction
 */
class DBAbstraction {

    private static $instance;

    private function __construct() {
        echo "tworzę obiekt dostępu do bazy danych";
    }

    public function __clone() {
        die('nie klonuj mnie - jestem singletonem!');
    }

    /**
     * @return DBAbstraction
     */
    public function getInstance() {
        if (!self::$instance instanceof DBAbstraction) {
            self::$instance = new DBAbstraction();
        }
        return self::$instance;
    }

}
