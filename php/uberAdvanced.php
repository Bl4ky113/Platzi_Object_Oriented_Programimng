<?php
    require_once("./car.php");
    class UberAdvanced extends Car {
        public $typeCarAccepted;
        public $seatsMaterial;

        public function __construct ($id, $license, $driver, $passengers, $typeCarAccepted, $seatsMaterial) {
            parent::__construct($id, $license, $driver, $passengers);

            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
    }
?>