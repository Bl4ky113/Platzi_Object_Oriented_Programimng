<?php
    require_once("./driver.php");
    require_once("./uberVan.php");


    $uberVan = new UberVan(16, "ASD123", new Driver(16, "Martin", "1013", "@gmail", "pass"), 6, "Che", "Carro");
    echo ($uberVan->getDriver()->getName());
    echo ($uberVan->getPassengers());
?>