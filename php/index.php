<?php
    require_once("./driver.php");
    require_once("./uberBasic.php");


    $uberX = new UberBasic(16, "ASD123", new Driver(16, "Martin", "1013", "@gmail", "pass"), 4, "Che", "Carro");
    echo $uberX->driver->name;
?>