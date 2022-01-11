<?php
    class Car {
        private $id;
        private $license;
        private $driver;
        protected $passengers;

        public function __construct ($id, $license, $driver, $passengers) {
            $this->id = $id;
            $this->license = $license;
            $this->driver = $driver;
            $this->setPassengers($passengers);
        }

        public function getId () {
            return $this->id;
        }

        public function setId ($id) {
            $this->id = $id;
        }
        
        public function getLicense () {
            return $this->license;
        }
        
        public function setLicense ($license) {
            $this->license = $license;
        }

        public function getDriver () {
            return $this->driver;
        }
        
        public function setDriver ($driver) {
            $this->driver = $driver;
        }
        
        public function getPassengers () {
            return $this->passengers;
        }

        public function setPassengers ($passengers) {
            if ($passengers >= 4) {
                $this->passengers = $passengers;
            } else {
                echo("Car Passengers Must be 4 or more");
            }
        }
    }
?>