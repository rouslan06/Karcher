<?php

require 'index.php';
require 'classes/Car.class.php';

// Je récupère les valeurs saisies dans le formulaire de dépôt d'annonces//
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $product = new Car(
        $_POST["image"],
        $_POST["model"],
        $_POST["brand"],
        $_POST["description"],
        $_POST["year"],
        $_POST["price"],
    );

// J'appelle ma BDD //
$dbh = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root"); 

// J'insère dans la BDD les données récupérées du formulaire  //
    $query = $dbh->prepare("INSERT INTO `product` (`image`, `model`, `brand`, `description`,`year`, `price`) VALUE (?, ?, ?, ?, ?, ?)");
    $query->execute([$product->getImage(),$product->getModel(),$product->getBrand(),$product->getDescription(),$product->getYear(),$product->getPrice()]);
    echo 'Annonce ajoutée';

}

?>