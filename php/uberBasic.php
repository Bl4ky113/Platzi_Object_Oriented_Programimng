<?php
    require_once("./car.php");
    class UberBasic extends Car {
        private $brand;
        private $model;

        public function __construct ($id, $license, $driver, $passengers, $brand, $model) {
            parent::__construct($id, $license, $driver, $passengers);

            $this->brand = $brand;
            $this->model = $model;
        }

        public function getBrand () {
            return $this->brand;
        }

        public function setBrand ($brand) {
            $this->brand = $brand;
        }

        public function getModel () {
            return $this->model;
        }

        public function setModel ($model) {
            $this->model = $model;
        }
    }
?>