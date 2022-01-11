<?php
    class Car {
        public $id;
        public $license;
        public $driver;
        public $passengers;

        public function __construct ($id, $license, $driver, $passengers) {
            $this->id = $id;
            $this->license = $license;
            $this->driver = $driver;
            $this->passengers = $passengers;
        }
    }
?>