<?php
    require_once("./uberAdvanced.php");
    class UberVan extends UberAdvanced {
        public function __construct ($id, $license, $driver, $passengers, $typeCarAccepted, $seatsMaterial) {
            parent::__construct($id, $license, $driver, $passengers, $typeCarAccepted, $seatsMaterial);
        }

        public function setPassengers ($passengers) {
            if ($passengers >= 6) {
                $this->passengers = $passengers;
            } else {
                echo("Car Passengers Must be 6 or more");
            }
        }
    }
?>