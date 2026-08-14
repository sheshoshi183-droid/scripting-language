<?php
class Laptop {
    function __construct() {
        echo "Laptop object created.<br>";
    }

    function displayLaptop() {
        echo "Laptop details: Dell Laptop, 8GB RAM, 512GB SSD.<br>";
    }

    function __destruct() {
        echo "Laptop object destroyed.<br>";
    }
}

$laptop = new Laptop();
$laptop->displayLaptop();
?>