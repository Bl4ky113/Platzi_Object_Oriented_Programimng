<?php
    require_once("./car.php");
    class UberAdvanced extends Car {
        private $typeCarAccepted;
        private $seatsMaterial;

        public function __construct ($id, $license, $driver, $passengers, $typeCarAccepted, $seatsMaterial) {
            parent::__construct($id, $license, $driver, $passengers);

            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
        
        public function getTypeCarAccepted () {
            return $this->getTypeCarAccepted; 
        }
        
        public function setTypeCarAccepted ($getTypeCarAccepted) {
            $this->getTypeCarAccepted = $getTypeCarAccepted;
        }

        public function getSeatsMaterial () {
            return $this->seatsMaterial; 
        }
        
        public function setSeatsMaterial ($seatsMaterial) {
            $this->seatsMaterial = $seatsMaterial;
        }
    }
?>