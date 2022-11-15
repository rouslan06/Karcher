<?php

//Création du système de connection à ma base de donnée

$con = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");

// Si la connection entre la base de donnée et le site n'est pas possible (Ce message apparrait)

if(mysqli_connect_error()){
    exit('Erreur de connexion à la base de données' . mysqli_connect_error());
}

// 

if (!isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'])){
    exit('Champs vide');
}

    if(empty($_POST['nom']) || empty($_POST["prenom"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        exit('valeurs vide');
    }

            if($stmt = $con->prepare('INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)')) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bindValue(1, $_POST['prenom'], PDO::PARAM_STR);
                $stmt->bindValue(2, $_POST['nom'], PDO::PARAM_STR);
                $stmt->bindValue(3, $_POST['email'], PDO::PARAM_STR);
                $stmt->bindValue(4, $password, PDO::PARAM_STR);
                $stmt->execute();
                header('location: inscription.php?Empty=Inscription réussi, vous pouvez vous connecter.');
            } else {
                header('location: inscription.php?Empty=Une erreur est survenue !');;
            };

        $stmt = null;

    $con = null
?>