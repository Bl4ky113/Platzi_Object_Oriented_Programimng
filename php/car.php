<?php
    class Car {
        $id = Integer;
        $license = String;
        $driver = String;
        $passengers = Integer;

        public function __construct ($id, $license, $driver, $passengers) {
            $this -> id = $id;
            $this -> license = $license;
            $this -> driver = $driver;
            $this -> passengers = $passengers;
        }
    }
?>