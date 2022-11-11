<?php

    try {
        $id = htmlspecialchars($_GET["id"]);
        $bla = htmlspecialchars($_GET["price"]);

        $prix = htmlspecialchars($_POST["valeurInput"]);

        $conn = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "
            UPDATE product 
            SET price=$prix 
            WHERE id=$id
        ";
        
        // Prepare statement
        $stmt = $conn->prepare($sql);

        /*
        if ( $prix < $bla ) {
            echo "La valeur ne pet être inférieur !";
            header("refresh:5;url=http://localhost:8888/karcher/Page/affichageListe/affichageListe.php");
        }
        */

        // execute the query
        $stmt->execute();
        
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " MAJ ok ! redirection";

        header('location: http://localhost:8888/karcher/Page/affichageListe/affichageListe.php');

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
        
    $conn = null;

?>