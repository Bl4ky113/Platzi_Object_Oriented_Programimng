<?php
    require_once("./car.php");
    class UberBasic extends Car {
        public $brand;
        public $model;

        public function __construct ($id, $license, $driver, $passengers, $brand, $model) {
            parent::__construct($id, $license, $driver, $passengers);

            $this->brand = $brand;
            $this->model = $model;
        }
    }
?>