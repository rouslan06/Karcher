<?php

    try {
        $id = htmlspecialchars($_GET["id"]);

        $conn = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // sql to delete a record
        $sql = "
            DELETE FROM product 
            WHERE id=$id
        ";
    
        // use exec() because no results are returned
        $conn->exec($sql);

        echo "supprimé avec succé";

        header('location: http://localhost:8888/karcher/Page/affichageListe/affichageListe.php');
        
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;

?>