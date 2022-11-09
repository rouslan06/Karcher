<?php

//Création du système de connection à ma base de donnée

$DATABASE_HOST    = "localhost";
$DATABASE_USER   = "root";
$DATABASE_PASS   = "";
$DATABASE_NAME  = "karcher";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

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
                $stmt->bind_param('ssss', $_POST['prenom'], $_POST['nom'], $_POST['email'], $password);
                $stmt->execute();
                echo 'Enregistré avec succès';
            } else {
                echo 'Une erreur est survenue';
            };

        $stmt->close();

    $con->close()
?>