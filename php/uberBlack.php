<?php
    require_once("./uberAdvanced.php");
    class UberBlack extends UberAdvanced {
        public function __construct ($id, $license, $driver, $passengers, $typeCarAccepted, $seatsMaterial) {
            parent::__construct($id, $license, $driver, $passengers, $typeCarAccepted, $seatsMaterial);
        }
    }
?>