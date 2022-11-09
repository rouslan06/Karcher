<?php

require 'index.php';
require 'classes/Car.class.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $product = new Car(
        $_POST["image"],
        $_POST["model"],
        $_POST["brand"],
        $_POST["description"],
        $_POST["year"],
        $_POST["time_limit"],
        $_POST["price"],
    );

    $dbh = new PDO("mysql:dbname=Karcher;host=127.0.0.1;port=8889", "root", "root");

    $query = $dbh->prepare("INSERT INTO `product` (`image`, `model`, `brand`, `description`,`year`, `time_limit`, `price`) VALUE (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$product->getImage(),$product->getModel(),$product->getBrand(),$product->getDescription(),$product->getYear(),$product->getTimeLimit(),$product->getPrice()]);
    echo 'Annonce ajoutée';


}

?>